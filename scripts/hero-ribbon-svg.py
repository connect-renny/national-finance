# Usage: python scripts/hero-ribbon-svg.py [draw-seconds] > ribbon.svg  — then paste into .home-hero__ribbon in index.html
# Hero ribbon SVG generator. Centre line hand-traced from hero-ribbon.png
# (1706x435). Each traced cubic is split into N short pieces with their own
# gradient so the colour follows the curve. Pieces are emitted in REVERSE
# order so earlier parts of the ribbon sit on top at the two crossings.
import math, sys

W = 80                      # ribbon thickness
N = 4                       # pieces per traced segment
TOTAL = float(sys.argv[1]) if len(sys.argv) > 1 else 2.6   # draw time (s)
start, start_col = (12, 391), "#ca0033"
segs = [  # (control 1, control 2, end point, colour at end)
    ((120, 395), (250, 382), (330, 352), "#9d0049"),
    ((400, 325), (450, 300), (475, 260), "#7a005c"),
    ((500, 215), (470, 150), (415, 148), "#4f006f"),
    ((360, 146), (335, 200), (345, 245), "#30007f"),
    ((355, 300), (410, 345), (490, 348), "#0b0091"),
    ((560, 350), (620, 310), (680, 270), "#4a0072"),
    ((760, 215), (850, 170), (930, 160), "#97004d"),
    ((1010, 152), (1090, 175), (1115, 230), "#bc003a"),
    ((1140, 300), (1100, 360), (1040, 363), "#ac0042"),
    ((980, 365), (945, 330), (955, 280), "#890053"),
    ((965, 220), (1010, 160), (1070, 125), "#5a006a"),
    ((1150, 85), (1250, 80), (1330, 96), "#0a0091"),
    ((1420, 112), (1500, 125), (1570, 108), "#000097"),
    ((1620, 96), (1645, 70), (1665, 45), "#000097"),
]

def lerp(a, b, t): return tuple(x + (y - x) * t for x, y in zip(a, b))
def bez(p0, p1, p2, p3, t):
    u = 1 - t
    return tuple(u**3*a + 3*u*u*t*b + 3*u*t*t*c + t**3*d for a, b, c, d in zip(p0, p1, p2, p3))
def length(p0, p1, p2, p3):
    pts = [bez(p0, p1, p2, p3, i / 40) for i in range(41)]
    return sum(math.dist(pts[i], pts[i + 1]) for i in range(40))
def split(p0, p1, p2, p3, t):
    a, b, c = lerp(p0, p1, t), lerp(p1, p2, t), lerp(p2, p3, t)
    d, e = lerp(a, b, t), lerp(b, c, t)
    f = lerp(d, e, t)
    return (p0, a, d, f), (f, e, c, p3)
def mix(c1, c2, t):
    a = [int(c1[i:i+2], 16) for i in (1, 3, 5)]
    b = [int(c2[i:i+2], 16) for i in (1, 3, 5)]
    return "#%02x%02x%02x" % tuple(round(x + (y - x) * t) for x, y in zip(a, b))
def f1(v): return f"{v:.1f}".rstrip("0").rstrip(".")

pieces, p0, c0 = [], start, start_col
for c1, c2, end, col in segs:
    rest = (p0, c1, c2, end)
    for k in range(N):
        piece, rest = split(*rest, 1 / (N - k)) if k < N - 1 else (rest, None)
        pieces.append((piece, mix(c0, col, k / N), mix(c0, col, (k + 1) / N)))
    p0, c0 = end, col

lens = [length(*p) for p, _, _ in pieces]
tot, acc = sum(lens), 0.0
defs, paths = [], []
for i, ((a, b, c, d), ca, cb) in enumerate(pieces):
    dur, delay = TOTAL * lens[i] / tot, TOTAL * acc / tot
    acc += lens[i]
    defs.append(f'<linearGradient id="hr{i}" gradientUnits="userSpaceOnUse" x1="{f1(a[0])}" y1="{f1(a[1])}" x2="{f1(d[0])}" y2="{f1(d[1])}"><stop stop-color="{ca}"/><stop offset="1" stop-color="{cb}"/></linearGradient>')
    tx, ty = d[0] - c[0], d[1] - c[1]
    n = math.hypot(tx, ty) or 1
    # 3px tangent overshoot so the flat joints overlap with no hairline seam
    tail = f"L{f1(d[0] + 3*tx/n)} {f1(d[1] + 3*ty/n)}" if i < len(pieces) - 1 else ""
    pts = " ".join(f1(v) for v in (*b, *c, *d))
    paths.append(f'<path d="M{f1(a[0])} {f1(a[1])}C{pts}{tail}" stroke="url(#hr{i})" pathLength="1" style="--d:{delay:.3f}s;--t:{dur:.3f}s"/>')

end = pieces[-1][0][3]
caps = (f'<circle class="hero-ribbon__cap" cx="{start[0]}" cy="{start[1]}" r="{W//2}" fill="{start_col}" style="--d:0s"/>\n'
        f'  <circle class="hero-ribbon__cap" cx="{f1(end[0])}" cy="{f1(end[1])}" r="{W//2}" fill="#000097" style="--d:{TOTAL:.3f}s"/>')
print(f'<svg class="hero-ribbon" viewBox="0 0 1706 435" fill="none" stroke-width="{W}" aria-hidden="true" focusable="false">\n'
      '  <defs>\n    ' + "\n    ".join(defs) + '\n  </defs>\n  ' + "\n  ".join(reversed(paths)) + '\n  ' + caps + '\n</svg>')
