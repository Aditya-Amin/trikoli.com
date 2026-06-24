<?php
/**
 * Title: Section — About + Stats
 * Slug: trikoli/about
 * Categories: trikoli-sections
 * Description: About + Stats section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-about' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-about-area mb--16" id="about">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area">
<p class="sub-title">ABOUT US</p>
<h2 class="section-title second-font font-semi-bold text-normal quote">At our core, we believe

                            good

                            design is more than beauty, it’s emotion</h2>
</div>
</div>
<div class="about-bottom-content square-dot">
<div class="left-area">
<ul>
<li class="border-top">
<p class="top-description">OUR RESULTS SPEAK FOR THEMSELVES. EACH NUMBER <br/> REPRESENTS

                                    THE TRUST WE’VE BUILT.</p>
</li>
<li class="border-top with-icon">
<div class="icon"><img alt="" src="{{BASE}}icons/01_fc0b7247.svg"/></div>
<div class="text">
<h2 class="h4 title"><span class="odometer second-font font-semi-bold" data-count="99">00</span>%</h2>
<p class="desc">Average uptime across our SaaS platforms</p>
</div>
</li>
<li class="border-top with-icon">
<div class="icon"><img alt="" src="{{BASE}}icons/02_1e5d49ba.svg"/></div>
<div class="text">
<h2 class="h4 title"><span class="odometer second-font font-semi-bold" data-count="120">00</span>+</h2>
<p class="desc">Products & devices shipped worldwide</p>
</div>
</li>
<li class="border-top with-icon">
<div class="icon"><img alt="" src="{{BASE}}icons/03_8d9fa076.svg"/></div>
<div class="text">
<h2 class="h4 title"><span class="odometer second-font font-semi-bold" data-count="4.9">00</span><span class="prefix">/ 5</span></h2>
<p class="desc">Customer rating across our product suite</p>
</div>
</li>
</ul>
</div>
<div class="right-area">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_2f0e808d.webp" width="802"/>
<img alt="" class="image-shape-right-bottom" src="{{BASE}}icons/shape-01_bb6ae002.svg"/>
</div>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="bottom-shape-area square-dot">
<img alt="" src="{{BASE}}icons/shape-02_3aac96a9.svg"/>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
