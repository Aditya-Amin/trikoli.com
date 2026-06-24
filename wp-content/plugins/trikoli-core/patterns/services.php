<?php
/**
 * Title: Section — Services Cards
 * Slug: trikoli/services
 * Categories: trikoli-sections
 * Description: Services Cards section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-services' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-services-area mb--16" id="services">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">SERVICES</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">We Build

                            We Create </h2>
</div>
</div>
<div class="section-bottom-content square-dot">
<div class="service-wrapper wow fadeInRight" data-wow-delay=".2s">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_5711d4e0.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">SAAS PLATFORMS</p>
<p class="desc">We create digital experiences that are visually striking, intuitive, and

                                    conversion-focused.</p>
</div>
<div class="mid">
<h2>01</h2>
</div>
<div class="bottom">
<ul>
<li>Website Concept</li>
<li>Web Animation</li>
<li>CMS Integration</li>
<li>SEO-Friendly Design</li>
</ul>
<a class="service-btn-area" href="/services/">
<svg fill="none" height="18" viewbox="0 0 10 18" width="10" xmlns="http://www.w3.org/2000/svg">
<path d="M1.07812 0L0 1.07812L7.71094 8.78906L0 16.5L1.07812 17.5781L9.32812 9.32812L9.84375 8.78906L9.32812 8.25L1.07812 0Z" fill="black"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="service-wrapper wow fadeInRight" data-wow-delay=".4s">
<div class="image-area">
<img alt="" src="{{BASE}}img/02_a1967011.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">DIGITAL PRODUCTS</p>
<p class="desc">We build distinctive visual systems that tell your story and strengthen

                                    your brand.</p>
</div>
<div class="mid">
<h2>02</h2>
</div>
<div class="bottom">
<ul>
<li>Brand Strategy</li>
<li>Logo Design</li>
<li>Brand Guidelines</li>
<li>Packaging Design</li>
</ul>
<a class="service-btn-area" href="/services/">
<svg fill="none" height="18" viewbox="0 0 10 18" width="10" xmlns="http://www.w3.org/2000/svg">
<path d="M1.07812 0L0 1.07812L7.71094 8.78906L0 16.5L1.07812 17.5781L9.32812 9.32812L9.84375 8.78906L9.32812 8.25L1.07812 0Z" fill="black"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="service-wrapper wow fadeInRight" data-wow-delay=".6s">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_b1c6aef3.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">IOT DEVICES</p>
<p class="desc">We transform complex ideas into seamless interfaces that deliver

                                    measurable results.</p>
</div>
<div class="mid">
<h2>03</h2>
</div>
<div class="bottom">
<ul>
<li>User Research</li>
<li>Information Architecture</li>
<li>Wireframes &amp; Prototyping</li>
<li>Usability Testing</li>
</ul>
<a class="service-btn-area" href="/services/">
<svg fill="none" height="18" viewbox="0 0 10 18" width="10" xmlns="http://www.w3.org/2000/svg">
<path d="M1.07812 0L0 1.07812L7.71094 8.78906L0 16.5L1.07812 17.5781L9.32812 9.32812L9.84375 8.78906L9.32812 8.25L1.07812 0Z" fill="black"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="service-wrapper wow fadeInRight" data-wow-delay=".8s">
<div class="image-area">
<img alt="" src="{{BASE}}img/04_65c4c1dc.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">PRODUCT ENGINEERING</p>
<p class="desc">We help brands stay consistent and inspired with art direction that

                                    aligns every detail with your vision.</p>
</div>
<div class="mid">
<h2>04</h2>
</div>
<div class="bottom">
<ul>
<li>Visual Campaign</li>
<li>Art Direction</li>
<li>Photography Guidance</li>
<li>Brand Tone</li>
</ul>
<a class="service-btn-area" href="/services/">
<svg fill="none" height="18" viewbox="0 0 10 18" width="10" xmlns="http://www.w3.org/2000/svg">
<path d="M1.07812 0L0 1.07812L7.71094 8.78906L0 16.5L1.07812 17.5781L9.32812 9.32812L9.84375 8.78906L9.32812 8.25L1.07812 0Z" fill="black"></path>
</svg>
</a>
</div>
</div>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
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
