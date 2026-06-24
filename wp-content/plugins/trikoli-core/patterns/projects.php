<?php
/**
 * Title: Section — Projects Slider
 * Slug: trikoli/projects
 * Categories: trikoli-sections
 * Description: Projects Slider section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-projects' ); // pulls in tk-swiper-css
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-project-area mb--16">
<div class="container">
<div class="section-inner border-1">
<div class="space"></div>
<div class="floating-content">
<div class="section-title-area center-style">
<p class="sub-title bg-white">OUR VISION</p>
<h2 class="section-title second-font font-semi-bold text-normal">Every project we take on <br/>
<span>starts <span><img alt="" src="{{BASE}}img/sm_a399bf60.webp" width="147"/></span>

                            with a</span> <br/> deep understanding of goals

                        </h2>
<p class="desc">We’re a multidisciplinary design agency that blends creativity, strategy, and

                            technology to build meaningful brands and digital experiences. The results don’t just look

                            great, they work great.</p>
</div>
</div>
<div class="wpr-video-pin">
<div class="wpr-video-wrapper">
<div class="swiper project-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="slide feature-project">
<div class="image-area">
<img alt="" class="video-img" src="{{BASE}}img/01_bb700101.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left_e9fc1483.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right_bfd3412a.svg"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h2 class="h3 title"><a href="/products/">Nova Mobile App</a>
</h2>
<p class="desc">We streamlined user flows, refreshed the visual

                                                        language, and introduced accessibility-focused design components

                                                        to improve usability.</p>
</div>
<div class="bottom">
<ul>
<li>
<h3 class="h5">40%</h3>
<p>Faster completion</p>
</li>
<li>
<h3 class="h5">+25%</h3>
<p>Faster completion</p>
</li>
<li>
<h3 class="h5">4.8</h3>
<p>Star rating</p>
</li>
</ul>
</div>
</div>
</div>
<div class="hover_mouse">
<div class="box"></div>
<a href="/products/">

                                                View Projects

                                                <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="slide feature-project">
<div class="image-area">
<img alt="" class="video-img" src="{{BASE}}img/02_0e716b77.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left_e9fc1483.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right_bfd3412a.svg"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Axis Legal Website</a>
</h3>
<p class="desc">We streamlined user flows, refreshed the visual

                                                        language, and introduced accessibility-focused design components

                                                        to improve usability.</p>
</div>
<div class="bottom">
<ul>
<li>
<h3 class="h5">+70%</h3>
<p>Session duration</p>
</li>
<li>
<h3 class="h5">1 unified</h3>
<p>Brand system</p>
</li>
<li>
<h3 class="h5">4 w</h3>
<p>Delivery time</p>
</li>
</ul>
</div>
</div>
</div>
<div class="hover_mouse">
<div class="box"></div>
<a href="/products/">

                                                View Projects

                                                <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="slide feature-project">
<div class="image-area">
<img alt="" class="video-img" src="{{BASE}}img/03_17ef53f9.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left_e9fc1483.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right_bfd3412a.svg"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Lunaris Co .

                                                            Branding</a></h3>
<p class="desc">We crafted a modern visual identity for Lunaris

                                                        Coffee Co., blending organic textures with clean typography to

                                                        reflect their artisanal roots.</p>
</div>
<div class="bottom">
<ul>
<li>
<h3 class="h5">+65%</h3>
<p>Brand recognition</p>
</li>
<li>
<h3 class="h5">12</h3>
<p>New product lines</p>
</li>
<li>
<h3 class="h5">3 mon</h3>
<p>To done project</p>
</li>
</ul>
</div>
</div>
</div>
<div class="hover_mouse">
<div class="box"></div>
<a href="/products/">

                                                View Projects

                                                <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
</div>
<div class="swiper-navigation">
<div class="swiper-btn slider-prev">
<svg fill="none" height="30" viewbox="0 0 17 30" width="17" xmlns="http://www.w3.org/2000/svg">
<path d="M14.6094 0L0.859375 13.75L0 14.6484L0.859375 15.5469L14.6094 29.2969L16.4062 27.5L3.55469 14.6484L16.4062 1.79688L14.6094 0Z" fill="#F9FAFB"></path>
</svg>
</div>
<div class="swiper-btn slider-next">
<svg fill="none" height="30" viewbox="0 0 17 30" width="17" xmlns="http://www.w3.org/2000/svg">
<path d="M1.79688 0L0 1.79688L12.8516 14.6484L0 27.5L1.79688 29.2969L15.5469 15.5469L16.4062 14.6484L15.5469 13.75L1.79688 0Z" fill="#F9FAFB"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
