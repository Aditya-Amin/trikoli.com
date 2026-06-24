<?php
/**
 * Title: Section — Brand Logos
 * Slug: trikoli/brand
 * Categories: trikoli-sections
 * Description: Brand Logos section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-brand' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<div class="wpr-brand-area mb--16">
<div class="container">
<div class="section-inner square-dot">
<div class="left-text">
<p>//WE’VE <br/> TRUSTED BY</p>
</div>
<div class="right-marquee-area">
<div class="brand-inner">
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/01_5ec173d3.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/02_7954df03.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/03_ae6f1e0c.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/04_c68c005d.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/05_bb4203ff.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/06_e10269cb.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/01_5ec173d3.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/02_7954df03.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/03_ae6f1e0c.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/04_c68c005d.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/05_bb4203ff.svg"/>
</div>
<div class="brand-wrapper">
<img alt="" src="{{BASE}}icons/06_e10269cb.svg"/>
</div>
</div>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
</div>
</div>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
