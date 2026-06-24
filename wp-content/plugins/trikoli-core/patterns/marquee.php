<?php
/**
 * Title: Section — Marquee
 * Slug: trikoli/marquee
 * Categories: trikoli-sections
 * Description: Marquee section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-marquee' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-marquee-area mb--16">
<div class="container">
<div class="section-inner overflow-hidden border-1">
<div class="text-wrapper first-text">
<div class="text-split scrollingtext-1">
<h2 class="title">

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>

                            Innovative <span><img alt="" src="{{BASE}}icons/black-right_21821add.svg"/></span>
</h2>
</div>
</div>
<div class="text-wrapper">
<div class="text-split scrollingtext-2">
<h2 class="title">

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>

                            Visionary <span><img alt="" src="{{BASE}}icons/black-left_4b9ce430.svg"/></span>
</h2>
</div>
</div>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
