"""
Arabic (RTL) page builder.

  python scripts/build-arabic.py extract   -> writes scripts/i18n/strings.json (new keys only)
  python scripts/build-arabic.py build     -> writes ar/*.html from the English pages

The English pages stay the source of truth. Every visible text node and the
text attributes (alt, aria-label, placeholder, title, meta content, data-label-*)
are looked up in scripts/i18n/ar.json; anything missing is reported and left in
English. Re-run `build` after editing an English page.
"""

import html
import json
import re
import sys
from html.parser import HTMLParser
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
PAGES = ["index.html", "ceo-message.html", "employee-directory.html", "policies.html", "news.html", "tahadath.html"]
I18N = ROOT / "scripts" / "i18n"
OUT = ROOT / "ar"

TEXT_ATTRS = {"alt", "aria-label", "placeholder", "title", "data-label-open", "data-label-closed", "data-empty",
              "data-name", "data-designation", "data-department", "data-branch"}
SKIP_TAGS = {"script", "style"}
# Strings that stay as they are (brand marks, numbers, already Arabic).
KEEP = re.compile(r"^[\d\s.,:/+\-–—()#%&|·•]*$|^[؀-ۿ\s،.!؟]+$")


def norm(s):
    return re.sub(r"\s+", " ", s).strip()


class Collector(HTMLParser):
    """Records (start, end, kind, text) spans so they can be replaced in place."""

    def __init__(self, src):
        super().__init__(convert_charrefs=False)
        self.src = src
        self.lines = [0]
        for m in re.finditer("\n", src):
            self.lines.append(m.end())
        self.spans = []
        self.stack = []

    def off(self):
        line, col = self.getpos()
        return self.lines[line - 1] + col

    def handle_starttag(self, tag, attrs):
        start = self.off()
        raw = self.get_starttag_text()
        if tag not in ("br", "img", "input", "meta", "link", "source", "hr", "wbr") and not raw.endswith("/>"):
            self.stack.append(tag)
        meta_name = dict(attrs).get("name") or dict(attrs).get("property")
        for m in re.finditer(r'([\w:-]+)\s*=\s*"([^"]*)"', raw):
            name, val = m.group(1), m.group(2)
            translatable = name in TEXT_ATTRS or (tag == "option" and name == "value") or (tag == "meta" and name == "content" and meta_name in ("description", "og:title", "og:description"))
            if translatable and norm(html.unescape(val)):
                self.spans.append((start + m.start(2), start + m.end(2), "attr", val))

    handle_startendtag = handle_starttag

    def handle_endtag(self, tag):
        if tag in self.stack:
            while self.stack and self.stack.pop() != tag:
                pass

    def handle_data(self, data):
        if self.stack and self.stack[-1] in SKIP_TAGS:
            return
        if norm(data):
            start = self.off()
            self.spans.append((start, start + len(data), "text", data))

    def handle_entityref(self, name):
        self._entity("&%s;" % name)

    def handle_charref(self, name):
        self._entity("&#%s;" % name)

    def _entity(self, raw):
        # Glue entities onto the neighbouring text span so "Policies &amp; Procedure" stays one string.
        if self.stack and self.stack[-1] in SKIP_TAGS:
            return
        start = self.off()
        if self.spans and self.spans[-1][1] == start and self.spans[-1][2] == "text":
            s, e, k, t = self.spans[-1]
            self.spans[-1] = (s, start + len(raw), k, t + raw)
        else:
            self.spans.append((start, start + len(raw), "text", raw))


def collect(src):
    c = Collector(src)
    c.feed(src)
    c.close()
    # Merge text spans that touch (text + entity + text).
    merged = []
    for s in sorted(c.spans):
        if merged and merged[-1][2] == "text" and s[2] == "text" and merged[-1][1] == s[0]:
            ps, pe, pk, pt = merged[-1]
            merged[-1] = (ps, s[1], pk, pt + s[3])
        else:
            merged.append(s)
    return merged


def key_of(raw):
    return norm(html.unescape(raw))


def extract():
    I18N.mkdir(exist_ok=True)
    path = I18N / "strings.json"
    have = json.loads(path.read_text("utf-8")) if path.exists() else []
    seen = set(have)
    for page in PAGES:
        for _, _, _, raw in collect((ROOT / page).read_text("utf-8")):
            k = key_of(raw)
            if k and not KEEP.match(k) and k not in seen:
                seen.add(k)
                have.append(k)
    path.write_text(json.dumps(have, ensure_ascii=False, indent=1), "utf-8")
    print(f"{len(have)} strings -> {path}")


def localise_paths(src):
    # ar/ sits one level down: point shared files back up, keep page links local.
    src = re.sub(r'((?:href|src|srcset|content|poster|data-photo)=")(?!https?:|#|mailto:|tel:|data:|\.\./|/)(assets/|favicon)', r"\1../\2", src)
    src = re.sub(r"url\((['\"]?)(assets/)", r"url(\1../\2", src)
    return src


def build():
    tr = json.loads((I18N / "ar.json").read_text("utf-8"))
    OUT.mkdir(exist_ok=True)
    missing = {}
    for page in PAGES:
        src = (ROOT / page).read_text("utf-8")
        out, last = [], 0
        for start, end, kind, raw in collect(src):
            k = key_of(raw)
            if not k or KEEP.match(k):
                continue
            ar = tr.get(k)
            if ar is None:
                missing.setdefault(k, page)
                continue
            lead = re.match(r"^\s*", raw).group(0)
            trail = re.search(r"\s*$", raw).group(0) if raw.strip() else ""
            val = html.escape(ar, quote=(kind == "attr"))
            out.append(src[last:start])
            out.append(val if kind == "attr" else lead + val + trail)
            last = end
        out.append(src[last:])
        page_ar = "".join(out)

        page_ar = page_ar.replace('<html lang="en" dir="ltr"', '<html lang="ar" dir="rtl"', 1)
        page_ar = page_ar.replace("assets/css/bootstrap.min.css", "assets/css/bootstrap.rtl.min.css")
        page_ar = localise_paths(page_ar)
        # Arabic pages preload Cairo instead of the Latin display faces.
        page_ar = re.sub(
            r'(\s*<link rel="preload" href="\.\./assets/fonts/Foundry[^"]+" as="font"[^>]*>)+',
            '\n    <link rel="preload" href="../assets/fonts/Cairo-Arabic.woff2" as="font" type="font/woff2" crossorigin />',
            page_ar,
            count=1,
        )
        # Language switch: Arabic page -> English twin.
        page_ar = re.sub(
            r'<a class="(header-lang|drawer__lang)" href="[^"]*" lang="ar" hreflang="ar">(<span>)?[^<]*(</span>)?</a>',
            lambda m: f'<a class="{m.group(1)}" href="../{page}" lang="en" hreflang="en">{m.group(2) or ""}English{m.group(3) or ""}</a>',
            page_ar,
        )
        with (OUT / page).open("w", encoding="utf-8", newline="\n") as f:
            f.write(page_ar)

        # English page -> Arabic twin.
        en = re.sub(
            r'(<a class="(?:header-lang|drawer__lang)" href=")[^"]*(" lang="ar" hreflang="ar">)',
            rf"\1ar/{page}\2",
            src,
        )
        if en != src:
            with (ROOT / page).open("w", encoding="utf-8", newline="\n") as f:
                f.write(en)

    if missing:
        print(f"{len(missing)} untranslated strings:")
        for k, p in missing.items():
            print(f"  [{p}] {k}")
    print(f"built {len(PAGES)} pages -> {OUT}")


if __name__ == "__main__":
    {"extract": extract, "build": build}[sys.argv[1]]()
