<?php
/**
 * Title: Section — Call To Action
 * Slug: trikoli/cta
 * Categories: trikoli-sections
 * Description: Call To Action section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-cta' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-cta-area">
<div class="container">
<div class="section-inner border-1">
<div class="section-title-area">
<h2 class="section-title">LET’s start <br/> your project</h2>
<div class="logo"><img alt="" src="{{BASE}}img/logo-white.svg"/></div>
<div class="arrow-track right">
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_d7692796.svg"/></div>
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_d7692796.svg"/></div>
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_d7692796.svg"/></div>
</div>
<div class="arrow-track left">
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_e2b2da25.svg"/></div>
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_e2b2da25.svg"/></div>
<div class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_e2b2da25.svg"/></div>
</div>
</div>
<div class="bg-shape"><img alt="" src="{{BASE}}icons/grid_6e94c57a.svg"/></div>
<div class="section-bottom-shape">
<img alt="" src="{{BASE}}icons/graphic_557f6421.svg"/>
<span class="tag left">IMPACTFUL CREATIVE</span>
<span class="tag right">GLOBAL SUPPORT</span>
</div>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
