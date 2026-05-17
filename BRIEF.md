# BRIEF

## 1 · Analysis

### What this business actually is
Anyo at Disenyo (Tagalog for "form and design") is a small architectural firm based in Batangas City, Philippines. The Facebook metadata describes them as "an architectural firm with service expertise…" — the rest is cut off, but the page positions them as a multi-disciplinary studio offering architectural design and likely interior design, planning, and project management for residential and small commercial clients in Southern Luzon. They monetize through professional fees on design commissions and project supervision. With only 281 page likes, this is a boutique, relationship-driven practice — not a scaled-up firm — and the website's job is to make them look as serious as the work likely is.

### Who the audience really is
- **Primary**: prospective Filipino clients in Batangas, Calabarzon, and Metro Manila — typically 30–55, building or renovating a home or small commercial space (café, clinic, office), evaluating 2–3 architects after a referral and wanting proof of taste, professionalism, and reliability before they call.
- **Secondary**: contractors and suppliers vetting them as a collaborator, local journalists / lifestyle bloggers covering Batangas design, and prospective junior architects looking at portfolios before applying.

### What they're trying to convey
- Serious design discipline — not a draftsman, an architect with a point of view.
- Rooted in place — Batangas / Filipino tropical context, not a generic global studio cosplay.
- Trustworthy small practice — partner-led attention, not an unreachable firm.

### What's broken about the current presentation
- The only web presence is a Facebook page with 281 likes — zero authority signal for anyone outside the immediate network.
- No portfolio of finished work visible to a cold visitor; nothing to evaluate taste on.
- No clear services, no process, no team — visitors can't tell if this is a one-person shop or a studio.
- No contact pathway beyond Facebook Messenger — friction for the older / professional client who wants an email and phone.
- Brand identity defaults to Facebook chrome (blue UI, square OG crop) rather than anything architectural.

### What the rebuild should optimize for
**Primary**: convert qualified inquirers into a first consultation by making the studio's work and seriousness immediately legible. Secondary: (1) establish a referenceable portfolio so referrers have something to share; (2) communicate the studio's design philosophy and place-rootedness so the right clients self-select.

### Hard facts to preserve
- Business name: **Anyo at Disenyo**
- Location: **Batangas City, Philippines** `[verify exact street address]`
- Discipline: architectural firm with multi-service expertise `[verify full service list — likely architecture, interior design, planning, project management]`
- Page likes: 281 (not worth surfacing on site)
- Existing channel: Facebook — `facebook.com/anyoatdisenyo`
- Phone, email, hours, founding year, principal architect's name, license number (PRC): all `[verify]` — must be collected from client before launch.

## 2 · Brand

### Verdict
**Full rebrand.** The current "brand" is essentially Facebook's chrome — there's nothing to keep. A Filipino architectural studio targeting design-literate clients needs editorial authority and a sense of place; that has to be built from scratch. Direction: warm tropical-modern minimalism rooted in Filipino vernacular materials (capiz light, narra wood, raw concrete, lime plaster).

### Palette
- `#1B1A17` — Ink Black — ink (body text, headings)
- `#F2EBDE` — Bone — surface (page background, dominant)
- `#B0552B` — Terracotta — accent (links, CTA, key marks)
- `#5B5247` — Tabako — primary (secondary text, UI lines, meta)
- `#C9BFAE` — Lime Plaster — muted (dividers, hover surfaces, cards)

Body text uses `#1B1A17` on `#F2EBDE` — contrast ratio ~14:1, well above WCAG AAA.

### Typography
`Heading: Fraunces` + `Body: Inter`. Fraunces (variable serif with optical sizing) carries editorial gravitas at display sizes and softens at text sizes — right for an architecture monograph feel; Inter handles long descriptive captions, project specs, and forms with quiet authority. Pairing reads as serious-design-publication, not corporate template.

### Voice
**Quiet, deliberate, place-aware.** Short declarative sentences. Names materials and places by name (narra, capiz, Taal, Batangas). Never breathless or salesy; never apologetic. Writes the way a thoughtful architect speaks to a smart client over coffee — assumes they care about craft.

### Sample copy
- **Hero headline**: Architecture rooted in Batangas.
- **Hero subhead**: A small practice designing homes and spaces that belong to the Filipino climate, light, and the people who live in them.
- **Primary CTA**: Begin a project

## 3 · Plan

### Site map
- **Home** (`/`) — set tone, surface 3 featured projects, route to contact — primary action: scroll to projects, then "Begin a project"
- **Work** (`/work`) — full project index — primary action: click into a project case study
- **Project case study** (`/work/{slug}`) — single project deep-dive — primary action: "Begin a project" CTA at end
- **Studio** (`/studio`) — practice philosophy, services offered, principal bio — primary action: continue to Contact
- **Contact** (`/contact`) — phone, email, address, map, short form — primary action: send inquiry

### Navigation
- **Header nav**: Work · Studio · Contact (3 items, plus the wordmark linking home). Keep it ruthlessly short.
- **Footer**: studio address (Batangas City), phone, email, Facebook link, copyright line with year, small "site by" credit slot. Mirror nav links on the right. One column on mobile.

### Page content briefs

**Home (`/`)**
- Must accomplish: convince a cold visitor in 8 seconds that this is a serious studio worth contacting.
- Sections in order: (1) Hero — full-bleed photo of strongest project + restrained type overlay; (2) Short studio statement (2 sentences); (3) Featured Work — 3 projects, large images with project name + year + location only; (4) Services — three lines: Architecture, Interiors, Planning; (5) Closing — single sentence + "Begin a project" CTA leading to /contact.
- Imagery: one hero project shot (warm Filipino tropical interior or exterior at golden hour), three featured project covers.

**Work (`/work`)**
- Must accomplish: let a visitor evaluate range of work in one scroll.
- Sections: page intro (one sentence) → vertical list of projects, each as a large image + title + year + location + one-line descriptor. No filters, no fancy interactions — chronological reverse.
- CTA at bottom: "Begin a project".
- Imagery: one cover image per project.

**Project case study (`/work/{slug}`)**
- Must accomplish: prove design depth on one project.
- Sections: (1) Project header — title, location, year, scope, status; (2) Hero image; (3) Short narrative (200–400 words); (4) Image gallery in 1- and 2-up arrangements; (5) Facts panel — area sqm, completion date, collaborators; (6) Next project teaser + CTA.

**Studio (`/studio`)**
- Must accomplish: communicate the practice's values and who's behind it.
- Sections: (1) Philosophy — 3 short paragraphs on tropical modernism / Filipino vernacular / sustainable craft; (2) Services — Architecture, Interiors, Planning, Project Management with one-paragraph descriptions each; (3) Principal — portrait + short bio + credentials; (4) Process — 4-step (Inquiry → Schematic → Documentation → Construction Administration); (5) CTA strip.
- Imagery: one environmental portrait of the principal at a work site, one detail photo of a material (narra wood grain or capiz).

**Contact (`/contact`)**
- Must accomplish: get a qualified inquiry sent.
- Sections: (1) One-line invitation; (2) Two columns — left: email, phone, studio address, hours, Facebook; right: short inquiry form (name, email, phone, project type select, message); (3) Optional small static map image of Batangas City studio location.
- Form sits on the page itself — no modal. Mailto link visible above the form as fallback.

### Collections
The default `pages`, `posts`, and `contact` collections are kept (posts unused for now but retained for future journal). Add one new collection:

- **projects** — `name: projects` · `label: Projects` · `route: /work/{slug}` · `template: project.html` · `list_template: work.html`
  - `title` (text, required) — project name
  - `slug` (slug, required)
  - `location` (text, required) — e.g. "Batangas City"
  - `year` (number, required) — completion year
  - `scope` (text, required) — e.g. "Architecture, Interiors"
  - `status` (select: completed / in-progress / concept, required)
  - `area_sqm` (number, optional)
  - `cover_image` (url, required) — hero/cover image
  - `gallery` (textarea, optional) — newline-separated image URLs
  - `excerpt` (textarea, required) — one-line descriptor for index
  - `body` (markdown, required) — narrative case study
  - `featured` (boolean, optional) — surface on home
  - `order` (number, optional) — manual sort override

Justification: case studies are the entire selling mechanism of an architecture website; they need structured fields (location, year, scope) for consistent rendering. Pages collection alone can't enforce this.

### Forms
**Formspree placeholder.** `action="https://formspree.io/f/REPLACE_ME"` with an HTML comment beside it noting the client must create a Formspree endpoint and paste the form ID. Above the form, render a visible `<a href="mailto:hello@anyoatdisenyo.ph">` (placeholder address, `[verify]`) as a fallback for visitors who prefer email. A small architectural studio gets few inquiries per month — Formspree's free tier is more than enough and keeps the brand-correct form UI.

## 4 · Design

### Direction
**Filipino tropical modernism in monograph form.** Treat the site as a quiet architecture monograph: generous bone-colored paper, large editorial serif headings, full-bleed photography of warm tropical interiors with shafts of light, slow scroll, no decoration. Visual touchstones: **Studio MK27** (slow editorial portfolio, image-led), **Norm Architects** (restrained typography, warm minimalism), and **BUDJI+ROYAL** (Filipino tropical-modern material vocabulary). The studio's identity is in the photography and the negative space around it — not in graphic flourish. Every page should feel like turning a page in a thick matte design book.

### Type scale
1.333 modular scale, fluid clamped between mobile and desktop where useful.

- **Display** (hero h1, project titles on case studies): `4.5rem / 1.05 / 400` (Fraunces, optical 144, slight negative tracking -0.01em)
- **H1** (page titles): `3.0rem / 1.1 / 400` (Fraunces)
- **H2** (section headings): `2.0rem / 1.2 / 400` (Fraunces)
- **H3** (sub-sections): `1.25rem / 1.35 / 500` (Inter)
- **Body**: `1.0625rem / 1.65 / 400` (Inter, 17px)
- **Small / meta** (project location, year, captions, footer): `0.8125rem / 1.5 / 500` (Inter, tracking 0.04em, UPPERCASE for eyebrows only)

### Spacing & rhythm
- Container max-width: 1240px for content sections; full-bleed allowed for hero and gallery images.
- Section vertical padding: small `4rem` (64px), large `8rem` (128px) on desktop; halve on mobile.
- Grid gutters: 24px desktop, 16px mobile. Primary grid is 12-column but most layouts use 6-col text blocks offset left.
- Baseline grid: no strict baseline grid — line-height is the rhythm. Maintain consistent vertical spacing using a 4px sub-unit (margins as multiples of 4 / 8 / 16 / 32 / 64).

### Components

- **Header / nav** — 72px height desktop, 56px mobile. Wordmark (Fraunces, 1.125rem) left; three nav links + Facebook icon right, Inter small caps with 0.06em tracking. Background = bone surface, no shadow; on scroll, hairline 1px bottom border in Lime Plaster fades in. Mobile: hamburger triggers a full-bleed bone overlay with three large links in display serif.
- **Hero** — full-bleed image, 85vh on desktop, 70vh mobile. Headline overlay in bone over a subtle 0→40% dark gradient bottom-left. Headline lower-left at 6rem from edges. No center alignment.
- **Standard content section** — title left in H2 serif, body in a 6-of-12 column starting at column 4 (offset). When media is paired, alternate: text-left / image-right on odd sections, reversed on even. Generous 8rem section padding.
- **Card** (work index item) — full-width image at 16:10, project title (display 2.5rem) underneath left-aligned, year and location in small caps eyebrow above title. Hover: image lifts via 1.02x scale over 400ms, terracotta underline appears under title.
- **Footer** — 4rem vertical padding, bone surface, hairline top border. Three columns desktop (studio identity / contact / nav), stacked mobile. Inter small at 0.875rem. Year line bottom-left, "site by" bottom-right.
- **Buttons**
  - Primary: terracotta `#B0552B` background, bone text, 1rem 1.75rem padding, 2px radius (almost square), Inter 500 small caps. Hover: darkens to `#984621`, no transform. Focus: 2px terracotta outline offset 3px.
  - Secondary: transparent with 1px ink border, ink text. Hover: ink fill, bone text.
  - Link: ink underline with terracotta on hover; underline offset 4px.
- **Forms** — Inputs are bottom-border only (1px Tabako), no box. Labels above, Inter small caps eyebrow. Bone background. Active state: bottom border becomes terracotta 2px. Submit button = primary button. Generous 1.5rem vertical spacing between fields.

### Per-page layout

**Home (`/`)**
1. Header (sticky, transparent over hero).
2. Hero — full-bleed project photo, headline overlay bottom-left.
3. Studio statement — single 6-of-12 column offset left, H2 + one paragraph. 8rem padding.
4. Featured Work — three cards stacked vertically full-width, each at 16:9. Year + location eyebrow, project title in display serif.
5. Services — three-column row, each with title (H3) and one-line description. Hairline dividers between.
6. Closing strip — bone, 1 line of display serif "Begin a project in Batangas." + CTA button below.
7. Footer.

**Work (`/work`)**
1. Header.
2. Small page intro — 4rem top padding, eyebrow "PROJECTS" + H1 + one sentence.
3. Project list — vertical stack of full-width project cards, 8rem between. Most recent first.
4. CTA strip.
5. Footer.

**Project case study (`/work/{slug}`)**
1. Header.
2. Hero image — full-bleed, no overlay.
3. Project header strip — three columns: title (display) / meta (location, year, scope, area) / status badge. Bone surface, 6rem padding.
4. Narrative — 6-of-12 offset-left text column.
5. Image gallery — alternating 1-up full-bleed and 2-up side-by-side rows.
6. Facts panel — small caps eyebrow "DETAILS" + key-value pairs in two columns.
7. Next project teaser — image + title link.
8. Footer.

**Studio (`/studio`)**
1. Header.
2. Page intro — H1 + manifesto paragraph, 6-of-12 offset.
3. Philosophy — three offset paragraphs with eyebrow numerals "01 / 02 / 03".
4. Services — 2x2 grid (Architecture / Interiors / Planning / Project Management), each cell with H3 + short paragraph, hairline borders.
5. Principal — environmental portrait left, bio right (or stacked on mobile).
6. Process — horizontal four-step timeline with numerals and short labels.
7. CTA strip.
8. Footer.

**Contact (`/contact`)**
1. Header.
2. Page intro — H1 "Begin a project" + one-sentence invitation.
3. Two-column block — left: stacked contact details (Email / Phone / Studio / Hours / Facebook) with small-caps eyebrows; right: inquiry form.
4. Map image (static) — full-width band at the bottom showing the Batangas City studio location, treated as a desaturated still rather than an interactive embed.
5. Footer.

### Imagery plan

| Page | Slot | Treatment | Source | Search query (if photo) | Aspect |
|------|------|-----------|--------|-------------------------|--------|
| Home | Hero | Full-bleed, warm grade, slight grain | Photograph | `Filipino tropical modern house interior narra wood capiz` | 16:9 |
| Home | Featured project 1 | Full-bleed card image | Photograph | `Batangas Philippines modern bahay kubo architecture exterior` | 16:10 |
| Home | Featured project 2 | Full-bleed card image | Photograph | `Filipino modernist house Antonio Heredia Tropical` (fallback: `tropical modernist house Philippines exterior`) | 16:10 |
| Home | Featured project 3 | Full-bleed card image | Photograph | `concrete tropical residence Philippines courtyard plants` | 16:10 |
| Home | Services row | None (typography only) | — | — | — |
| Work | Project covers (×6 placeholder until client provides) | Editorial photo | Photograph | `Filipino architecture interior` / `tropical modern Philippines house` / `narra wood detail interior` / `capiz window Philippines` / `Batangas heritage architecture` / `Manila modern villa courtyard` | 16:10 each |
| Project | Hero | Full-bleed, no overlay | Photograph (placeholder) | Per project — fall back to `tropical modern residence Philippines interior` | 16:9 |
| Project | Gallery (×4) | Mix of 1-up and 2-up | Photograph (placeholder) | `narra wood floor detail` / `tropical house plan courtyard` / `Philippines architecture exterior dusk` / `concrete house interior tropical` | 4:5 and 3:2 |
| Studio | Principal portrait | Environmental, slightly cool | Photograph | `architect at desk drafting tropical studio` | 4:5 |
| Studio | Material detail | Macro, warm | Photograph | `narra wood grain close up` (alt: `capiz shell window Philippines`) | 3:2 |
| Contact | Map band | Desaturated static map | SVG illustration | Inline SVG of a stylized minimal map fragment with a terracotta pin marker — engineer draws a simple grid of streets + pin, no external map service | 16:5 |
| All | Wordmark | Inline SVG | SVG illustration | Engineer draws "Anyo at Disenyo" in Fraunces 400 as an inline SVG path for crisp rendering at small sizes — or use webfont text with letter-spacing -0.01em | — |

All photography is placeholder until the client supplies actual project images. The fetch script (`bash scripts/fetch-image.sh "<query>"`) pulls from Wikimedia Commons — likely sparse for very specific Filipino vernacular queries, so fall back to broader "tropical modern interior" queries when needed. Mark every placeholder with an HTML comment so the client can swap.

### Motion
Very little, snappy. Page loads: a 200ms opacity fade-in on the hero image (no slide, no parallax). Nav background border fades in on scroll past 80px. Card hover: 1.02x scale and underline fade over 400ms cubic-bezier(0.2, 0, 0, 1). No scroll-triggered reveals, no parallax, no full-page transitions. The architecture is what moves — the site holds still.

### What NOT to do
- Don't use Facebook blue, or any of the colors from `palette.json` — those are Facebook's chrome and have nothing to do with this studio.
- Don't fall back to generic "professional services" stock photography (handshakes, blueprints, hardhats). The site lives or dies on real architectural photography.
- Don't add a hero carousel, scroll-jacking, or AOS-style reveal animations — they signal "template" instantly to a design-literate audience.
- Don't write in startup voice ("We bring your dream home to life!"). The audience finds it embarrassing. Write the way a quiet, confident architect writes.
- Don't render anywhere near pure black `#000` on pure white `#FFF`. Bone surface and ink black are the contract — pure values break the warmth and signal "default template".
