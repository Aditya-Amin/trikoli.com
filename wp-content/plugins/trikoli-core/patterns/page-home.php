<?php
/**
 * Title: Page — Home
 * Slug: trikoli/page-home
 * Categories: trikoli-pages
 * Description: Page — Home (exact full page body).
 *
 * @package TrikoliCore
 */
// Home page uses every section — enqueue all supplement CSS handles.
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_style( 'tk-s-brand' );
wp_enqueue_style( 'tk-s-about' );
wp_enqueue_style( 'tk-s-services' );
wp_enqueue_style( 'tk-s-projects' );
wp_enqueue_style( 'tk-s-process' );
wp_enqueue_style( 'tk-s-marquee' );
wp_enqueue_style( 'tk-s-team' );
wp_enqueue_style( 'tk-s-awards' );
wp_enqueue_style( 'tk-s-testimonials' );
wp_enqueue_style( 'tk-s-pricing' );
wp_enqueue_style( 'tk-s-faq' );
wp_enqueue_style( 'tk-s-cta' );
wp_enqueue_style( 'tk-s-contact' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<!-- wpr banner area start -->
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
<!-- wpr banner area end -->
<!-- wpr brand area start -->
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
<!-- wpr brand area end -->
<!-- wpr about area start -->
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
<!-- wpr about area end -->
<!-- wpr services area start -->
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
<!-- wpr services area end -->
<!-- wpr project area start -->
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
<!-- wpr project area end -->
<!-- wpr working process area start -->
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
<!-- wpr working process area end -->
<!-- wpr marquee area start -->
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
<!-- wpr marquee area end -->
<!-- wpr why choose us area end -->
<section class="wpr-why-choose-us-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="bottom-shape-area square-dot">
<img alt="" src="{{BASE}}icons/shape-02_3aac96a9.svg"/>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="wpr-content-area border-1">
<div class="row justify-content-center">
<div class="col-xl-8 col-lg-10">
<div class="content-inner">
<div class="section-title-area center-style">
<p class="sub-title">THE DIFFERENCE</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">

                                        Why Should You

                                        Choose Us </h2>
</div>
<div class="row g-5">
<div class="col-lg-6 col-md-6">
<div class="why-choose-wrapper ml-auto">
<div class="wrapper-header">
<h3 class="title second-font font-semi-bold text-normal">Other

                                                    <span>Companies</span>
</h3>
<img alt="" class="shape" src="{{BASE}}icons/grid_f4714b0a.svg"/>
</div>
<ul class="wrapper-list">
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Operates as a service provider

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Focuses mainly on visual output

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Limited communication and feedback

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Rotating staff and inconsistent quality

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Delivers based only on initial brief

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                                    Focuses on one-off projects

                                                </li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="why-choose-wrapper">
<div class="wrapper-header two">
<div class="logo"><img alt="" src="{{BASE}}img/trikoli-logo.png" width="160"/></div>
<img alt="" class="shape" src="{{BASE}}icons/grid_f4714b0a.svg"/>
</div>
<ul class="wrapper-list two">
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Works as a strategic partner

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Blends creativity with understanding

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Transparent, collaborative workflow

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Dedicated senior team on every project

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Immerses deeply in your brand

                                                </li>
<li>
<img alt="" src="{{BASE}}icons/check-02_54d219d2.svg"/>

                                                    Designs with measurable outcomes in mind

                                                </li>
</ul>
</div>
</div>
</div>
<div class="bottom-button-area">
<a class="wpr-btn btn-primary" href="/contact/">Get Started</a>
</div>
</div>
</div>
</div>
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
<!-- wpr why choose us area end -->
<!-- wpr team area start -->
<section class="wpr-team-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="content-area">
<div class="section-bg-shape"><img alt="" src="{{BASE}}icons/grid-big_ce552699.svg"/></div>
<div class="section-title-area center-style">
<p class="sub-title">TEAM MEMBERS</p>
<h2 class="section-title second-font font-semi-bold text-normal quote">The Minds <br/> Behind the

                            Work

                        </h2>
</div>
<div class="section-bottom-inner">
<div class="row g-24">
<div class="col-xl-3 col-md-6 wow fadeInDown" data-wow-delay=".2s">
<div class="team-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_b9be6051.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Ethan Brooks </h3>
<p class="designation">Trikoli Founder</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-top-left">
<img alt="" src="{{BASE}}icons/shape-top-left_d2447351.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
<div class="team-wrapper down">
<div class="image-area">
<img alt="" src="{{BASE}}img/02_280d5c4e.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Liam Anderson </h3>
<p class="designation">Brand Identity Designer</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-bottom-left">
<img alt="" src="{{BASE}}icons/shape-bottom-left_68b99d50.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInDown" data-wow-delay=".6s">
<div class="team-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_40342cb7.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Ethan Walker </h3>
<p class="designation">Creative Director</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-top-right">
<img alt="" src="{{BASE}}icons/shape-top-right_23333d07.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
<div class="team-wrapper down">
<div class="image-area">
<img alt="" src="{{BASE}}img/04_3e07510a.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Mason Cole </h3>
<p class="designation">Lead UI/UX Designer</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-bottom-right">
<img alt="" src="{{BASE}}icons/shape-bottom-right_43b07e97.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInDown" data-wow-delay=".2s">
<div class="team-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/05_8b08f973.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Noah Reed </h3>
<p class="designation">Senior Product Designer</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-top-right">
<img alt="" src="{{BASE}}icons/shape-top-right_23333d07.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
<div class="team-wrapper down">
<div class="image-area">
<img alt="" src="{{BASE}}img/06_6822b38a.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> Oliver Hayes </h3>
<p class="designation">Design Strategist</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-bottom-left">
<img alt="" src="{{BASE}}icons/shape-bottom-left_68b99d50.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInDown" data-wow-delay=".6s">
<div class="team-wrapper">
<div class="image-area">
<img alt="" src="{{BASE}}img/07_6bcfaf3d.webp"/>
</div>
<div class="author-area">
<h3 class="title h6"> James Carter </h3>
<p class="designation">Art Director</p>
<div class="social">
<ul>
<li><a href="#"><img alt="" src="{{BASE}}icons/twitter_c7afcc89.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/linkedin_832a4964.svg"/></a>
</li>
<li><a href="#"><img alt="" src="{{BASE}}icons/github_7f9ef9d5.svg"/></a>
</li>
</ul>
</div>
</div>
<div class="shape shape-top-left">
<img alt="" src="{{BASE}}icons/shape-top-left_d2447351.svg"/>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
<div class="team-apply-wrapper">
<div class="top-content">
<div class="square-dot"></div>
<h3 class="title h6 text-normal font-semi-bold second-font">We’re Searching <br/>

                                            For Talents</h3>
<p class="desc">Join our team of creatives pushing boundaries, experimenting

                                            with ideas</p>
</div>
<a class="wpr-btn btn-primary with-icon" href="/contact/">
<div class="inner">
<div class="icon">
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
<span>
<img alt="" src="{{BASE}}icons/button-arrow-fixed_dc946cb6.svg"/>
</span>
</div>
</div>
<span>

                                            Apply Now

                                        </span>
</a>
<img alt="" class="shape" src="{{BASE}}icons/grid_f2751062.svg"/>
</div>
</div>
</div>
</div>
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
<!-- wpr team area end -->
<!-- wpr awards area start -->
<section class="wpr-awards-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-title-area">
<p class="sub-title">AWARDS</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">Design That

                        Gets Noticed

                    </h2>
</div>
<div class="award-accordion-area">
<div class="award-item active">
<div class="award-header">
<div class="left">
<div class="date">March 2025</div>
<div class="content">
<h3 class="h6 title">Awwwards – Site of the Day <br/> NovaPay</h3>
<p class="desc">

                                        Our redesign for NovaPay App was recognized for its seamless user flow, bold

                                        visual

                                        storytelling, and innovative motion design that set a new standard for fintech

                                        experiences.

                                    </p>
</div>
</div>
<div class="toggle"><span class="plus">+</span> <span class="minus">-</span></div>
</div>
<div class="image-area">
<img alt="" src="{{BASE}}img/01_231732aa.webp" width="306"/>
</div>
</div>
<div class="award-item">
<div class="award-header">
<div class="left">
<div class="date">January 2025</div>
<div class="content">
<h3 class="h6 title">Behance - Featured in UX/UI Design <br/>Muse Art Fair</h3>
<p class="desc">

                                        The Muse Art Fair 2024 campaign was featured for its clean typography, dynamic

                                        layout, and cohesive brand system across digital and print platforms.

                                    </p>
</div>
</div>
<div class="toggle"><span class="plus">+</span> <span class="minus">-</span></div>
</div>
<div class="image-area">
<img alt="" src="{{BASE}}img/02_89d628db.webp" width="306"/>
</div>
</div>
<div class="award-item">
<div class="award-header">
<div class="left">
<div class="date">October 2024</div>
<div class="content">
<h3 class="h6 title">CSS Design Awards - Best UI Design<br/>Lunaris Coffee Co.</h3>
<p class="desc">

                                        Our work for Lunaris Coffee Co. earned recognition for intuitive structure,

                                        refined color palettes, and elevated product presentation that enhanced user

                                        engagement.

                                    </p>
</div>
</div>
<div class="toggle"><span class="plus">+</span> <span class="minus">-</span></div>
</div>
<div class="image-area">
<img alt="" src="{{BASE}}img/03_a75194a0.webp" width="306"/>
</div>
</div>
<div class="award-item">
<div class="award-header">
<div class="left">
<div class="date">October 2024</div>
<div class="content">
<h3 class="h6 title">Webby Awards - Honoree<br/>Axis Legal Group</h3>
<p class="desc">

                                        The Axis Legal Group website was awarded for its sophisticated simplicity,

                                        balancing professional tone with a modern, responsive digital experience.

                                    </p>
</div>
</div>
<div class="toggle"><span class="plus">+</span> <span class="minus">-</span></div>
</div>
<div class="image-area">
<img alt="" src="{{BASE}}img/04_7e32eac1.webp" width="306"/>
</div>
</div>
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
<!-- wpr awards area end -->
<!-- wpr testimonials area start -->
<section class="wpr-testimonials-area mb--16">
<div class="container">
<div class="section-inner border-1">
<div class="swiper testimonials-image-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_cb54f8ad.webp"/>
</div>
</div>
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/02_1e3c7241.webp"/>
</div>
</div>
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_8ab091d5.webp"/>
</div>
</div>
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/01_cb54f8ad.webp"/>
</div>
</div>
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/02_1e3c7241.webp"/>
</div>
</div>
<div class="swiper-slide">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_8ab091d5.webp"/>
</div>
</div>
</div>
</div>
<div class="swiper testimonials-content-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Beyond expectations</h2>
<p class="desc">“Working with this team completely transformed how we present our

                                        product. Their attention to detail and understanding of user experience helped

                                        us increase engagement beyond expectations.”</p>
</div>
<div class="author-area">
<h3 class="h6">Daniel Lewis</h3>
<p>Founder, Lunaris Coffee Co.</p>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Professional experience</h2>
<p class="desc">“They delivered a sophisticated, modern brand that aligns perfectly

                                        with our values. Communication was seamless from start to finish — truly a

                                        professional experience.”</p>
</div>
<div class="author-area">
<h3 class="h6">Michael Roberts</h3>
<p>CEO, Axis Legal Group</p>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Genuinely love</h2>
<p class="desc">“Their design process is smart, collaborative, and strategic. They

                                        understood our vision quickly and turned it into a product our users genuinely

                                        love.”</p>
</div>
<div class="author-area">
<h3 class="h6">Jason Ward</h3>
<p>Product Manager, Brightly Studio</p>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Beyond expectations</h2>
<p class="desc">“Working with this team completely transformed how we present our

                                        product. Their attention to detail and understanding of user experience helped

                                        us increase engagement beyond expectations.”</p>
</div>
<div class="author-area">
<h3 class="h6">Daniel Lewis</h3>
<p>Founder, Lunaris Coffee Co.</p>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Professional experience</h2>
<p class="desc">“They delivered a sophisticated, modern brand that aligns perfectly

                                        with our values. Communication was seamless from start to finish — truly a

                                        professional experience.”</p>
</div>
<div class="author-area">
<h3 class="h6">Michael Roberts</h3>
<p>CEO, Axis Legal Group</p>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonials-content">
<div class="top">
<h2 class="title h5">Genuinely love</h2>
<p class="desc">“Their design process is smart, collaborative, and strategic. They

                                        understood our vision quickly and turned it into a product our users genuinely

                                        love.”</p>
</div>
<div class="author-area">
<h3 class="h6">Jason Ward</h3>
<p>Product Manager, Brightly Studio</p>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-navigation">
<div class="swiper-btn swiper-btn-prev">
<svg fill="none" height="30" viewbox="0 0 17 30" width="17" xmlns="http://www.w3.org/2000/svg">
<path d="M14.6094 0L0.859375 13.75L0 14.6484L0.859375 15.5469L14.6094 29.2969L16.4062 27.5L3.55469 14.6484L16.4062 1.79688L14.6094 0Z" fill="#F9FAFB"></path>
</svg>
</div>
<div class="swiper-btn swiper-btn-next">
<svg fill="none" height="30" viewbox="0 0 17 30" width="17" xmlns="http://www.w3.org/2000/svg">
<path d="M1.79688 0L0 1.79688L12.8516 14.6484L0 27.5L1.79688 29.2969L15.5469 15.5469L16.4062 14.6484L15.5469 13.75L1.79688 0Z" fill="#F9FAFB"></path>
</svg>
</div>
</div>
<div class="top-left-shape">
<img alt="" src="{{BASE}}icons/top-left-shape_9299ec3f.svg"/>
</div>
</div>
</div>
</section>
<!-- wpr testimonials area end -->
<!-- wpr why choose us area end -->
<section class="wpr-why-choose-us-area2 mb--16">
<div class="container">
<div class="section-inner border-1">
<div class="section-title-area">
<p class="sub-title">WHY CHOOSE US</p>
<h2 class="section-title second-font font-semi-bold text-normal">Help Brands <br/> Grow With Clarity

                    </h2>
</div>
<div class="bottom-content-area">
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".2s">
<div class="icon">
<img alt="" src="{{BASE}}icons/01_76d014c7.svg"/>
</div>
<div class="text">
<h3 class="h6 title second-font font-semi-bold text-normal">Strategy-Driven Design</h3>
<p class="desc">We combine research, storytelling, and design thinking to build solutions

                                that align with your goals — not just trends.</p>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".4s">
<div class="icon">
<img alt="" src="{{BASE}}icons/02_2435b19e.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Crafted for Impact</h2>
<p class="desc">From user experience to brand consistency, every detail is designed to make

                                a measurable difference.</p>
</div>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".6s">
<div class="icon">
<img alt="" src="{{BASE}}icons/03_1089af41.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Collaborative Process</h2>
<p class="desc">We work closely with clients at every step, ensuring transparency, feedback,

                                and shared success.</p>
</div>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".8s">
<div class="icon">
<img alt="" src="{{BASE}}icons/04_845d6eb8.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Consistent Excellence</h2>
<p class="desc">Our team delivers premium quality across every touchpoint - from identity to

                                product design.</p>
</div>
<span class="square-shape top-right"></span>
</div>
</div>
<div class="bottom-shape-area square-dot">
<img alt="" src="{{BASE}}icons/shape-02_3aac96a9.svg"/>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="top-right-shape"><img alt="" src="{{BASE}}icons/top-right-shape_98e3aba1.svg"/></div>
</div>
</div>
</section>
<!-- wpr why choose us area end -->
<!-- wpr pricing plans area start -->
<section class="wpr-pricing-plans-area mb--16" id="pricing">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">PRICING PLANS</p>
<h2 class="section-title second-font font-semi-bold text-normal">Plans That Fit Your Roadmap

                        </h2>
</div>
</div>
<div class="section-mid-area">
<div class="pricing-inner square-dot">
<div class="pricing-wrapper">
<div class="pricing-header">
<div class="plan-type">
<h3 class="h6">Starter Plan</h3>
<p>Available from Dec</p>
</div>
<h4 class="title h5">Small businesses, startups <br/> <span>or single-brand

                                        projects.</span>
</h4>
<div class="bottom-pricing">
<h4 class="price">$1,900 <span>/ month</span></h4>
<div class="button-area">
<a class="wpr-btn btn-primary" href="/contact/">Get Started</a>
</div>
</div>
<div class="shape-one">
<img alt="" src="{{BASE}}icons/shape-1_6a8840a1.svg"/>
</div>
<div class="shape-two">
<img alt="" src="{{BASE}}icons/grid-1_1cdc5d7c.svg"/>
</div>
</div>
<div class="pricing-body">
<ul>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Full service creative

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Intergration sync

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Monthly consulting call

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Updates every 2 days

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Simple subscription

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        3 times update

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Scales with your needs

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-01_117a5306.svg"/>

                                        Cancel anytime

                                    </li>
</ul>
</div>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="pricing-inner square-dot">
<div class="pricing-wrapper dark">
<div class="pricing-header">
<div class="plan-type">
<h3 class="h6">Growth Plan</h3>
<p>Available Now</p>
</div>
<h4 class="title h5">Established brands <br/> <span>seeking full-scale design

                                        support.</span> </h4>
<div class="bottom-pricing">
<h4 class="price">$4,500 <span>/ month</span></h4>
<div class="button-area">
<a class="wpr-btn btn-primary" href="/contact/">Get Started</a>
</div>
</div>
<div class="shape-one">
<img alt="" src="{{BASE}}icons/shape-2_a75ac56c.svg"/>
</div>
<div class="shape-two">
<img alt="" src="{{BASE}}icons/grid-2_ed2be9cd.svg"/>
</div>
</div>
<div class="pricing-body">
<ul>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Full managed project

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Access our entire team

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Simple subscription

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Updates every 2 days

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Weekly consulting call

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Creative strategy

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Scales with your needs

                                    </li>
<li>
<img alt="" src="{{BASE}}icons/check-03_d8df2a00.svg"/>

                                        Cancel anytime

                                    </li>
</ul>
</div>
</div>
<span class="square-shape top-right"></span>
</div>
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
<!-- wpr pricing plans area end -->
<!-- wpr faq area start -->
<section class="wpr-faq-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-content-area">
<div class="section-title-area center-style">
<p class="sub-title">FAQS</p>
<h2 class="section-title second-font font-semi-bold text-normal">FAQs </h2>
</div>
<div class="accordion-one" id="accordionExample2">
<div class="accordion-item">
<h2 class="accordion-header" id="headingSix">
<button aria-controls="collapseSix" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseSix" data-bs-toggle="collapse" type="button">

                                    What if I only need one specific service?

                                </button>
</h2>
<div aria-labelledby="headingSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseSix" role="region">
<div class="accordion-body">
<p class="desc">

                                        Absolutely — you don’t need to book a full package. Whether it’s a brand

                                        refresh, a website redesign, or UI/UX for a single product, we tailor our

                                        approach to match your exact needs and budget.

                                    </p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingSeven">
<button aria-controls="collapseSeven" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseSeven" data-bs-toggle="collapse" type="button">

                                    How long does a typical project take?

                                </button>
</h2>
<div aria-labelledby="headingSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseSeven" role="region">
<div class="accordion-body">
<p class="desc">

                                        Project timelines depend on the scope — most branding projects take 3–4 weeks,

                                        while full website or product design projects typically range from 6–8 weeks.

                                        We’ll confirm an exact timeline during the discovery phase.

                                    </p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingEight">
<button aria-controls="collapseEight" aria-expanded="true" class="accordion-button" data-bs-target="#collapseEight" data-bs-toggle="collapse" type="button">

                                    Do you work with clients internationally?

                                </button>
</h2>
<div aria-labelledby="headingEight" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2" id="collapseEight" role="region">
<div class="accordion-body">
<p class="desc">

                                        Yes. We collaborate with clients around the world through remote workshops,

                                        video calls, and real-time communication tools — ensuring a smooth process

                                        regardless of location.

                                    </p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingNine">
<button aria-controls="collapseNine" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseNine" data-bs-toggle="collapse" type="button">

                                    Can you handle both design and development?

                                </button>
</h2>
<div aria-labelledby="headingNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseNine" role="region">
<div class="accordion-body">
<p class="desc">

                                        Yes. While our core focus is design, we partner with trusted developers to bring

                                        your project to life with high-quality, responsive code — ensuring seamless

                                        design-to-development handoff.

                                    </p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingTen">
<button aria-controls="collapseTen" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#collapseTen" data-bs-toggle="collapse" type="button">

                                    How do we start a project with your team?

                                </button>
</h2>
<div aria-labelledby="headingTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseTen" role="region">
<div class="accordion-body">
<p class="desc">

                                        Simply reach out through our contact form or email. We’ll schedule a short

                                        discovery call to learn about your goals, then provide a proposal tailored to

                                        your needs.

                                    </p>
</div>
</div>
</div>
</div>
<div class="top-left-shape">
<img alt="" src="{{BASE}}icons/top-left-shape_af75fffd.svg"/>
</div>
<div class="bg-shape">
<img alt="" src="{{BASE}}icons/grid_e1cbdaec.svg"/>
</div>
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
<!-- wpr faq area end -->
<!-- wpr cta area start -->
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
<!-- wpr cta area end -->
<!-- wpr contact area start -->
<section class="wpr-contact-area mb--16" id="contact">
<div class="container">
<div class="section-inner">
<div class="left-content-area">
<div class="get-in-touch">
<p class="sub-title">CONTACT</p>
<ul>
<li><a href="#">hello@trikoli.com</a></li>
<li><a href="#">(+1) 555 087 2200</a></li>
</ul>
</div>
<div class="location-area">
<p class="sub-title">OFFFICES</p>
<ul>
<li>
<h2 class="h4">Dhaka</h2>
<p>Level 7, Tech Square, Banani <br/> Dhaka 1213 <br/> Bangladesh</p>
</li>
<li>
<h2 class="h4">Austin</h2>
<p>501 Congress Ave, Suite 150 <br/> Austin, TX 78701 <br/> United States</p>
</li>
</ul>
</div>
</div>
<div class="contact-form-area">
<form action="#" enctype="multipart/form-data" id="contact-form" method="POST">
<div class="single-input">
<label for="name">/YOUR NAME</label>
<input id="name" name="name" placeholder="Enter your full name" type="text"/>
</div>
<div class="single-input">
<label for="email">/YOUR E-MAIL</label>
<input id="email" name="email" placeholder="Enter your e-mail" type="email"/>
</div>
<div class="single-input">
<label for="message">/MORE ABOUT THE PROJECT</label>
<textarea id="message" name="message" placeholder="Leave us message" required=""></textarea>
</div>
<div class="single-input last">
<label for="upload-attachment">
<i class="fa-sharp-duotone fa-light fa-paperclip"></i> Add an Attachment

                                <input id="upload-attachment" name="file" type="file"/>
</label>
</div>
<div class="form-btn-area">
<button class="wpr-btn" type="submit">Submit Message</button>
</div>
<div id="form-messages"></div>
</form>
</div>
</div>
</div>
</section>
<!-- wpr contact area end -->
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
