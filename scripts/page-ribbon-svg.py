# Usage: python scripts/page-ribbon-svg.py <name> [draw-seconds] > ribbon.svg
# Inner-page hero ribbons (Employee Directory, Policies, Tahadath).
#
# How it works (needs numpy + Pillow):
#   1. The supplied ribbon artwork (a PNG on transparency) is traced into exact
#      vector outlines with sub-pixel marching squares:
#        • OUTLINE — the whole ribbon (alpha edge)
#        • FRONT   — the band that crosses on top (split from the rest by
#                    colour, so the overlap edge is exact too)
#   2. A smooth centre line through hand-placed points is cut into short
#      pieces, each a wide stroke with its own gradient (colours sampled from
#      the artwork) and its own --d/--t so CSS draws it at one steady speed —
#      the same draw-on as the home hero ribbon.
#   3. The strokes are clipped by the traced outlines, so the edges are the
#      artwork's own; the strokes only supply colour and the animation.
#
# Points are in the artwork's own pixels; `place` positions it on the banner.
import math, sys, pathlib
import numpy as np
from PIL import Image

ROOT = pathlib.Path(__file__).resolve().parent.parent

RIBBONS = {
    # Employee Directory banner (798×347) — artwork 750×406.
    "employee": dict(
        prefix="edr", box=(798, 347), art="scripts/art/employee-hero-shape.png",
        place="translate(-303 -89)",
        # Crimson starts top-right, sweeps into the loop, rises purple, arcs
        # over in blue and leaves bottom-left.
        points=[
            (815, 14), (735, 38), (660, 60), (600, 80), (540, 106), (495, 127),
            (447, 156), (385, 205), (336, 245), (308, 285), (297, 325), (306, 360),
            (336, 375), (370, 360), (394, 330), (407, 290), (415, 245), (414, 200),
            (410, 160), (392, 124), (362, 104), (330, 96), (300, 95), (240, 101),
            (180, 120), (120, 147), (60, 185), (0, 233), (-70, 292),
        ],
        # Pieces whose midpoint is crimson (r − b > FRONT_SPLIT) and above this
        # y belong only to the front band at the crossing.
        crossing_max_y=262,
    ),
}

FRONT_SPLIT = 50     # r − b threshold separating the crimson front band
STROKE = 96          # wide enough to fill the band; the clip gives the edge
N = 4                # pieces per segment

# Policies uses the same ribbon and placement as Employee Directory.
RIBBONS["policies"] = dict(RIBBONS["employee"], prefix="pol")

# News uses the same artwork, sitting 16px further right on its banner.
RIBBONS["news"] = dict(RIBBONS["employee"], prefix="nws", place="translate(-287 -90)")
RIBBONS["tahadath"] = dict(RIBBONS["news"], prefix="tah")

name = sys.argv[1] if len(sys.argv) > 1 else "employee"
TOTAL = float(sys.argv[2]) if len(sys.argv) > 2 else 1.6
cfg = RIBBONS[name]
pre = cfg["prefix"]

img = np.asarray(Image.open(ROOT / cfg["art"]).convert("RGBA")).astype(float)
R, G, B, A = (img[..., i] for i in range(4))
A /= 255.0
IH, IW = A.shape


# ─── 1. Sub-pixel marching squares ─────────────────────────────────────────
def contours(field, t=0.5):
    """Closed iso-lines of `field` at level t, as lists of (x, y) in pixel
    centres. The field is padded with zeros so every contour closes."""
    f = np.pad(field, 1)
    h, w = f.shape
    segs = {}

    def interp(p, q, vp, vq):
        k = (t - vp) / (vq - vp) if vq != vp else 0.5
        return (p[0] + (q[0] - p[0]) * k - 1, p[1] + (q[1] - p[1]) * k - 1)

    out_edges = []
    for y in range(h - 1):
        for x in range(w - 1):
            v = (f[y, x], f[y, x + 1], f[y + 1, x + 1], f[y + 1, x])
            idx = sum(1 << i for i in range(4) if v[i] > t)
            if idx in (0, 15):
                continue
            c = ((x, y), (x + 1, y), (x + 1, y + 1), (x, y + 1))
            # edge e: between corner e and e+1
            def E(e):
                a, b = e, (e + 1) % 4
                return (("h" if e in (0, 2) else "v"), min(c[a], c[b])), interp(c[a], c[b], v[a], v[b])
            table = {
                1: [(3, 0)], 2: [(0, 1)], 3: [(3, 1)], 4: [(1, 2)], 6: [(0, 2)],
                7: [(3, 2)], 8: [(2, 3)], 9: [(2, 0)], 11: [(2, 1)], 12: [(1, 3)],
                13: [(1, 0)], 14: [(0, 3)],
            }
            if idx in (5, 10):  # saddle — decide by the centre value
                centre = sum(v) / 4 > t
                if idx == 5:
                    pairs = [(3, 2), (1, 0)] if centre else [(3, 0), (1, 2)]
                else:
                    pairs = [(0, 3), (2, 1)] if centre else [(0, 1), (2, 3)]
            else:
                pairs = table[idx]
            for ea, eb in pairs:
                (ka, pa), (kb, pb) = E(ea), E(eb)
                out_edges.append((ka, kb, pa, pb))

    # Stitch directed segments into loops.
    nxt, pos = {}, {}
    for ka, kb, pa, pb in out_edges:
        nxt[ka] = kb
        pos[ka], pos[kb] = pa, pb
    loops, seen = [], set()
    for start in nxt:
        if start in seen:
            continue
        loop, k = [], start
        while k not in seen and k in nxt:
            seen.add(k)
            loop.append(pos[k])
            k = nxt[k]
        if len(loop) > 8:
            loops.append(loop)
    return loops


def simplify(pts, tol=0.22):
    """Douglas-Peucker on a closed loop."""
    def dp(seq):
        if len(seq) < 3:
            return seq
        (x1, y1), (x2, y2) = seq[0], seq[-1]
        dx, dy = x2 - x1, y2 - y1
        n = math.hypot(dx, dy) or 1e-9
        dmax, imax = 0, 0
        for i in range(1, len(seq) - 1):
            d = abs(dy * seq[i][0] - dx * seq[i][1] + x2 * y1 - y2 * x1) / n
            if d > dmax:
                dmax, imax = d, i
        if dmax > tol:
            return dp(seq[: imax + 1])[:-1] + dp(seq[imax:])
        return [seq[0], seq[-1]]
    half = len(pts) // 2
    return dp(pts[: half + 1])[:-1] + dp(pts[half:] + [pts[0]])[:-1]


def f1(v): return f"{v:.1f}".rstrip("0").rstrip(".")
def f2(v): return f"{v:.2f}".rstrip("0").rstrip(".")
def smooth(pts, r=3):
    """Gaussian-ish moving average along a closed loop: removes the half-pixel
    wobble of the raster edge while keeping the curve where it is. Points
    sharply cornered (where the front band meets the outline) are kept."""
    n = len(pts)
    w = [math.exp(-(k / (r * 0.6)) ** 2) for k in range(-r, r + 1)]
    out = []
    for i in range(n):
        # Detect a corner: direction change between the points r either side.
        ax, ay = pts[i][0] - pts[i - r][0], pts[i][1] - pts[i - r][1]
        bx, by = pts[(i + r) % n][0] - pts[i][0], pts[(i + r) % n][1] - pts[i][1]
        na, nb = math.hypot(ax, ay) or 1, math.hypot(bx, by) or 1
        if (ax * bx + ay * by) / (na * nb) < 0.5:
            out.append(pts[i])
            continue
        sx = sy = sw = 0
        for k, wk in zip(range(-r, r + 1), w):
            q = pts[(i + k) % n]
            sx += q[0] * wk; sy += q[1] * wk; sw += wk
        out.append((sx / sw, sy / sw))
    return out


def path_d(loops):
    return "".join("M" + "L".join(f"{f2(x)} {f2(y)}" for x, y in simplify(smooth(l), 0.12)) + "Z" for l in loops)


# Front band: inside the ribbon AND crimson. The colour field is smooth across
# the anti-aliased crimson/purple edge, so the overlap boundary is sub-pixel.
crimson = np.clip((R - B - FRONT_SPLIT) / 40 + 0.5, 0, 1)
outline_d = path_d(contours(A))
front_d = path_d(contours(np.minimum(A, crimson)))


# ─── 2. Centre line → gradient pieces ──────────────────────────────────────
def lerp(a, b, t): return tuple(x + (y - x) * t for x, y in zip(a, b))
def bez(p0, p1, p2, p3, t):
    u = 1 - t
    return tuple(u**3*a + 3*u*u*t*b + 3*u*t*t*c + t**3*d for a, b, c, d in zip(p0, p1, p2, p3))
def length(*p):
    pts = [bez(*p, i / 40) for i in range(41)]
    return sum(math.dist(pts[i], pts[i + 1]) for i in range(40))
def split(p0, p1, p2, p3, t):
    a, b, c = lerp(p0, p1, t), lerp(p1, p2, t), lerp(p2, p3, t)
    d, e = lerp(a, b, t), lerp(b, c, t)
    f = lerp(d, e, t)
    return (p0, a, d, f), (f, e, c, p3)
def pt(p): return f"{f1(p[0])} {f1(p[1])}"


def sample(p, want_front):
    """Artwork colour around p (5×5 average of opaque pixels of the right
    band). Returns None where p is off the art or covered by the other band."""
    x, y = round(p[0]), round(p[1])
    acc = []
    for yy in range(y - 2, y + 3):
        for xx in range(x - 2, x + 3):
            if 0 <= xx < IW and 0 <= yy < IH and A[yy, xx] > 0.95:
                is_front = crimson[yy, xx] > 0.5
                if is_front == want_front or not want_front and crimson[yy, xx] <= 0.5:
                    acc.append((R[yy, xx], G[yy, xx], B[yy, xx]))
    if len(acc) < 6:
        return None
    return tuple(sum(c[i] for c in acc) / len(acc) for i in range(3))


def is_front_at(p):
    x, y = round(p[0]), round(p[1])
    return 0 <= x < IW and 0 <= y < IH and A[y, x] > 0.5 and crimson[y, x] > 0.5


P = cfg["points"]
segs = []
for i in range(len(P) - 1):
    p0, p1 = P[max(i - 1, 0)], P[i]
    p2, p3 = P[i + 1], P[min(i + 2, len(P) - 1)]
    c1 = (p1[0] + (p2[0] - p0[0]) / 6, p1[1] + (p2[1] - p0[1]) / 6)
    c2 = (p2[0] - (p3[0] - p1[0]) / 6, p2[1] - (p3[1] - p1[1]) / 6)
    segs.append((p1, c1, c2, p2))

pieces = []
for seg in segs:
    rest = seg
    for k in range(N):
        piece, rest = split(*rest, 1 / (N - k)) if k < N - 1 else (rest, None)
        pieces.append(piece)

# Colour at every piece end, sampled from the art; gaps (off-art ends, or back
# band hidden under the front) are filled by interpolating neighbours.
ends = [pieces[0][0]] + [p[3] for p in pieces]
mids = [bez(*p, 0.5) for p in pieces]
# The front band is the ribbon's FIRST pass through the crossing: the run of
# pieces from the start until the colour leaves crimson. Deciding by position
# (not by pixel colour) matters — the second pass runs underneath the crimson.
first = next(i for i, m in enumerate(mids) if is_front_at(m))
last = first
while last + 1 < len(mids) and is_front_at(mids[last + 1]):
    last += 1
front = [i <= last for i in range(len(mids))]
cols = []
for j, e in enumerate(ends):
    owner = front[min(j, len(pieces) - 1)] if j < len(pieces) else front[-1]
    cols.append(sample(e, owner))
known = [j for j, c in enumerate(cols) if c]
for j, c in enumerate(cols):
    if c is None:
        lo = max([k for k in known if k < j], default=None)
        hi = min([k for k in known if k > j], default=None)
        if lo is None: cols[j] = cols[hi]
        elif hi is None: cols[j] = cols[lo]
        else:
            t = (j - lo) / (hi - lo)
            cols[j] = tuple(a + (b - a) * t for a, b in zip(cols[lo], cols[hi]))
hexc = ["#%02x%02x%02x" % tuple(round(v) for v in c) for c in cols]

lens = [length(*p) for p in pieces]
tot, acc = sum(lens), 0.0
defs, all_paths = [], []
for i, (a, b, c, d) in enumerate(pieces):
    dur, delay = TOTAL * lens[i] / tot, TOTAL * acc / tot
    acc += lens[i]
    defs.append(
        f'<linearGradient id="{pre}{i}" gradientUnits="userSpaceOnUse" x1="{f1(a[0])}" y1="{f1(a[1])}" '
        f'x2="{f1(d[0])}" y2="{f1(d[1])}"><stop stop-color="{hexc[i]}"/><stop offset="1" stop-color="{hexc[i + 1]}"/></linearGradient>'
    )
    tx, ty = d[0] - c[0], d[1] - c[1]
    n = math.hypot(tx, ty) or 1
    ext = (d[0] + tx / n * 3, d[1] + ty / n * 3)
    all_paths.append(
        f'<path d="M{pt(a)}C{pt(b)} {pt(c)} {pt(d)}L{pt(ext)}" stroke="url(#{pre}{i})" '
        f'pathLength="1" style="--d:{delay:.3f}s;--t:{dur:.3f}s"/>'
    )

# Back layer: everything except the crimson pieces at the crossing (those
# would paint crimson over the purple band beside them). Front layer: the
# crimson pieces, clipped to the exact front band, drawn on top.
cy = cfg["crossing_max_y"]
back = [p for i, p in enumerate(all_paths) if not (front[i] and mids[i][1] < cy)]
front_paths = [p for i, p in enumerate(all_paths) if front[i]]

W, H = cfg["box"]
print(f'<svg class="page-ribbon" viewBox="0 0 {W} {H}" preserveAspectRatio="none" fill="none" '
      f'stroke-width="{STROKE}" aria-hidden="true" focusable="false">')
print("  <defs>")
# Masks rather than clipPaths: browsers anti-alias mask edges.
for mid, d in (("all", outline_d), ("front", front_d)):
    print(f'    <mask id="{pre}-{mid}" maskUnits="userSpaceOnUse" x="-100" y="-100" width="1000" height="700">'
          f'<path fill="#fff" d="{d}"/></mask>')
for d in defs:
    print("    " + d)
print("  </defs>")
print(f'  <g transform="{cfg["place"]}">')
print(f'    <g mask="url(#{pre}-all)">')
for p in reversed(back):
    print("      " + p)
print("    </g>")
print(f'    <g mask="url(#{pre}-front)">')
for p in reversed(front_paths):
    print("      " + p)
print("    </g>")
print("  </g>")
print("</svg>")
