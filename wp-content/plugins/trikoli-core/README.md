# Trikoli Core

Namespaced Gutenberg block library, patterns and section/header/footer widgets for the Trikoli ecosystem. Build sites by drag & drop (Elementor-style) using native WordPress blocks — reusable and scalable across business, WooCommerce, magazine and newspaper themes.

All blocks live under the **`trikoli/`** namespace and group into the **Trikoli** / **Trikoli: Sections** inserter categories.

---

## Requirements

- WordPress 6.5+ (block theme / FSE)
- PHP 7.4+
- Node.js 18+ and npm (to build the block assets)

## Install & build

```bash
cd wp-content/plugins/trikoli-core
npm install
npm run build      # compiles src/blocks/* -> build/ and generates build/blocks-manifest.php
```

For local development with hot rebuild:

```bash
npm run start
```

Then activate **Trikoli Core** in *Plugins*, and the **Trikoli** theme in *Appearance → Themes*.

> Until you run `npm run build`, an admin notice reminds you the blocks aren't compiled yet. PHP registration auto-discovers everything in `build/blocks/`, so no PHP edits are needed when you add blocks.

---

## What's included

### Blocks (`trikoli/*`)
| Block | Purpose |
|-------|---------|
| `section` | Flexible section wrapper (plain / boxed card / soft), InnerBlocks |
| `hero` | Banner with eyebrow, title, description, 2 buttons, optional image |
| `heading` | Eyebrow + title + sub-text section header |
| `button` | Brand button (primary / outline / white / navy, sizes, arrow) |
| `feature-grid` + `feature-card` | Responsive card grid (services / pillars) |
| `counter` | Animated count-up stat with prefix/suffix/label |
| `cta` | Bold call-to-action band |
| `faq` + `faq-item` | Accordion of questions/answers |
| `product-grid` + `product-card` | Product / portfolio showcase grid |
| `team-grid` + `team-member` | Team member cards with socials |
| `testimonials` + `testimonial` | Customer quote grid |
| `pricing` + `pricing-plan` | Pricing plans (featured highlight) |
| `marquee` | Continuously scrolling text band |
| `steps` + `step` | Numbered process / how-it-works |
| `contact` | Info cards + Google map + **working form** (dynamic, emails admin) |

**22 blocks total.** The `contact` block is server-rendered (`render.php`) and its form posts to `admin-post.php` (`trikoli_contact`), validated by nonce + honeypot, delivered via `wp_mail()`.

### Page patterns (Trikoli: Pages)
Full drag-in pages: **About, Services, Products, Career, Contact** — each composed from the section patterns, mirroring the original HTML site.

Each block exposes settings in the **Inspector** (sidebar) plus native WordPress controls (color, spacing, border, typography) via `theme.json` — the Elementor-style "control everything" experience, done the standards way.

### Patterns
Header, Footer, Hero, Services (3 pillars), Stats, CTA, FAQ — found under **Trikoli: Sections / Headers / Footers** in the pattern inserter. The theme's `front-page` is composed from these patterns.

### Front-end runtime
`assets/js/trikoli-frontend.js` (vanilla, no jQuery) powers scroll-reveal, counters and FAQ accordions. `assets/css/trikoli-blocks.css` provides shared, token-driven styling (editor + front).

---

## Architecture (why it scales)

```
trikoli-core/
├─ trikoli-core.php          # bootstrap, defines TRIKOLI_CORE_NS, block category
├─ includes/
│  ├─ class-trikoli-blocks.php    # auto-registers every block in build/blocks/*
│  ├─ class-trikoli-patterns.php  # auto-loads patterns/*.php via file headers
│  └─ class-trikoli-assets.php    # shared editor+front assets
├─ src/blocks/<name>/{block.json,index.js}   # one folder per block (JSX, wp-scripts)
├─ patterns/*.php            # one file per pattern (WP pattern header format)
└─ assets/{css,js}
```

- **Zero-config block discovery** — drop a new folder in `src/blocks/`, run `npm run build`; it's registered automatically (no PHP changes). WP 6.7+ uses `wp_register_block_metadata_collection` for performance.
- **Theme-agnostic blocks** — blocks read design tokens (`--wp--preset--color--*`, fonts, spacing) from whatever theme is active, so the same plugin re-skins instantly per theme.
- **Pattern-driven pages** — patterns are the "templates" users drag in; new categories/files extend coverage without touching code.

### Adding a new block (the template)

1. `mkdir src/blocks/my-block`
2. Add `block.json` (set `"name":"trikoli/my-block"`, `"category":"trikoli"`, `"editorScript":"file:./index.js"`).
3. Add `index.js` with `registerBlockType( metadata.name, { edit, save } )`.
4. (Optional) add styles to `assets/css/trikoli-blocks.css` or a per-block `style.scss`.
5. `npm run build` — done. It appears in the inserter automatically.

### Scaling to other verticals (WooCommerce / magazine / newspaper)

- **Theme side:** add a `styles/<vertical>.json` style variation (palette + type) — see `themes/trikoli/styles/magazine.json`. WooCommerce themes add WooCommerce templates (`templates/single-product.html`, `archive-product.html`) and the `woocommerce/*` blocks.
- **Plugin side:** add vertical pattern categories (e.g. `trikoli-magazine`) in `class-trikoli-patterns.php` and drop new `patterns/*.php`; add vertical blocks (e.g. `trikoli/post-grid`, `trikoli/price-table`) under `src/blocks/`. The namespace, auto-registration and asset pipeline stay identical.

---

## Namespace

The namespace is centralized as `TRIKOLI_CORE_NS` (`trikoli`) and the `trikoli/` block prefix. To white-label, rename the namespace in `block.json` files + `TRIKOLI_CORE_NS` and rebuild.
