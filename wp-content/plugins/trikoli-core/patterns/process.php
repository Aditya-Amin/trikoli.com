<?php
/**
 * Title: Section — Working Process
 * Slug: trikoli/process
 * Categories: trikoli-sections
 * Description: Working Process section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-process' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-working-process mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="row">
<div class="col-lg-6">
<div class="working-process-left">
<div class="section-title-area">
<p class="sub-title">PROCESS</p>
<h2 class="section-title second-font font-semi-bold text-normal quote">Combine

                                    Creativity <br/>

                                    With Strategy</h2>
</div>
<div class="text-area">
<p class="desc">Every step designed to deliver clarity, impact, and results.</p>
<a class="wpr-btn btn-primary with-icon" href="/contact/">
<div class="inner">
<div class="icon">
<span class="fixed-arrow">
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-2_45f7bbd7.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-2_45f7bbd7.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-2_45f7bbd7.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-2_45f7bbd7.svg"/>
</span>
</div>
</div>

                                    Start a Project

                                </a>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="right-content-area">
<div class="working-process-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_c65b9204.webp"/>
</div>
<div class="content-area">
<div class="number">//01</div>
<div class="wrapper-content">
<h3 class="title second-font h6">Discover &amp; Define</h3>
<p class="desc">We start by understanding your goals, audience, and challenges.

                                            Through research and workshops, we uncover insights of the project.</p>
</div>
</div>
</div>
<div class="working-process-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/02_c290c2a4.webp"/>
</div>
<div class="content-area">
<div class="number">//02</div>
<div class="wrapper-content">
<h3 class="title second-font h6">Concept &amp; Strategy</h3>
<p class="desc">We explore visual styles, narratives, and user flows to define

                                            the strategic and aesthetic direction of your brand or product.</p>
</div>
</div>
</div>
<div class="working-process-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_959ac04a.webp"/>
</div>
<div class="content-area">
<div class="number">//03</div>
<div class="wrapper-content">
<h3 class="title second-font h6">Design &amp; Develop</h3>
<p class="desc">Every layout, color, and interaction is thoughtfully crafted to

                                            ensure your brand feels cohesive, functional, and memorable.</p>
</div>
</div>
</div>
<div class="working-process-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/04_f7a04d7c.webp"/>
</div>
<div class="content-area">
<div class="number">//04</div>
<div class="wrapper-content">
<h3 class="title second-font h6">Launch &amp; Evolve</h3>
<p class="desc">We guide you through launch and beyond - analyzing performance,

                                            gathering feedback, and refining your design.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="bottom-shape-area bg-white square-dot">
<img alt="" src="{{BASE}}icons/shape-02_3aac96a9.svg"/>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
