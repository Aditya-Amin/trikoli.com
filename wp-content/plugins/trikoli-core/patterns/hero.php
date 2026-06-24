<?php
/**
 * Title: Section — Hero / Banner
 * Slug: trikoli/hero
 * Categories: trikoli-sections
 * Description: Hero / Banner section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-banner-area">
<div class="container">
<div class="banner-content-area">
<div class="top-shape wow fadeIn" data-wow-delay=".7s"></div>
<h1 class="section-title">
<span class="left-area square-dot wow fadeInLeft" data-wow-delay=".7s">
<span class="text">WE BUILD</span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
<span class="arrow-track right">
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-right_66d45eb6.svg"/></span>
</span>
</span>
<span class="mid-icon wow scaleIn" data-wow-delay=".7s">
<span class="inner">
<img alt="" src="{{BASE}}img/center-hero_092fbacb.webp" width="303"/>
</span>
</span>
<span class="right-area square-dot wow fadeInRight" data-wow-delay=".7s">
<span class="arrow-track right">
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
<span class="arrow"><img alt="" src="{{BASE}}icons/arrow-left_8a432017.svg"/></span>
</span>
<span class="text">PRODUCTS</span>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
</span>
</h1>
<div class="text-area wow fadeInUp" data-wow-delay="1s">
<p class="desc"> We turn ideas into timeless digital experiences <br/> through thoughtful strategy

                        and refined aesthetics.</p>
<div class="button-area">
<a class="wpr-btn btn-white" href="#pricing">View Plans</a>
<a class="wpr-btn btn-primary with-icon" href="#services">
<div class="inner">
<div class="icon">
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow_4fe40275.svg"/>
</span>
</div>
</div>

                            Explore Solutions

                        </a>
</div>
</div>
<div class="bg-shape">
<img alt="" src="{{BASE}}icons/bg-shape_a5e2123d.svg"/>
</div>
<div class="banner-shape-area">
<img alt="" class="one wow fadeInLeft" data-wow-delay=".2s" src="{{BASE}}icons/shape-01_e62eff28.svg"/>
<img alt="" class="two wow fadeInRight" data-wow-delay=".2s" src="{{BASE}}icons/shape-02_38cee164.svg"/>
</div>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
