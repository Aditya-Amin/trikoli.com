=== Trikoli ===
Contributors: trikoli
Requires at least: 6.5
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A scalable full-site-editing block theme for product companies (SaaS, digital products, IoT), built for Gutenberg.

== Description ==

Trikoli is a block (FSE) theme designed to pair with the **Trikoli Core** blocks plugin. Build pages by drag & drop using the Trikoli blocks and patterns. The theme owns design tokens (colors, Space Grotesk + Urbanist fonts, spacing, layout) via theme.json; the plugin owns the blocks, patterns and header/footer widgets under the trikoli/* namespace.

Reusable across verticals (business, WooCommerce, magazine, newspaper) through:
* theme.json **style variations** in /styles (see magazine.json),
* the plugin's namespaced, auto-registered blocks,
* extensible pattern categories.

== Requirements ==

* WordPress 6.5+ with the **Trikoli Core** plugin installed and built (npm run build).

== Quick start ==

1. Install & activate the **Trikoli Core** plugin (build its assets: `npm install && npm run build`).
2. Activate the **Trikoli** theme.
3. Appearance → Editor to customize templates, header and footer.
4. Create a page, open the inserter (+) → **Patterns → Trikoli: Sections** to drag in Hero, Services, Stats, CTA, FAQ, etc.
5. Settings → Reading → set a static front page to use the supplied front-page template.

== Changelog ==

= 1.0.0 =
* Initial release: FSE templates, header/footer parts, theme.json tokens, style variation, custom "Full Width Page" template.
