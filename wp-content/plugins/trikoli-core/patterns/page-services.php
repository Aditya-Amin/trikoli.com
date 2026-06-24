<?php
/**
 * Title: Page — Services
 * Slug: trikoli/page-services
 * Categories: trikoli-pages
 * Description: Page — Services (exact full page body).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_style( 'tk-s-services' );
wp_enqueue_style( 'tk-s-process' );
wp_enqueue_style( 'tk-s-faq' );
wp_enqueue_style( 'tk-s-cta' );
wp_enqueue_style( 'tk-s-contact' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<!-- header area end -->

<!-- wpr banner area start -->
<section class="wpr-banner-area breadcrumb">
<div class="container">
<div class="banner-content-area">
<h1 class="section-title text-normal wow scaleIn" data-wow-delay=".7s">

                    We build functional <br/> digital experiences.

                </h1>
<p class="desc"> We turn ideas into meaningful digital experiences through thoughtful strategy and

                    refined design. <br/>

                    Our approach blends creativity, technology, and purpose to build brands that last.</p>
<div class="bg-shape">
<img alt="" src="{{BASE}}icons/bg-shape_a5e2123d.svg"/>
</div>
<div class="banner-shape-area">
<img alt="" class="one wow fadeInLeft" data-wow-delay=".5s" src="{{BASE}}icons/shape-01_e62eff28.svg" width="200"/>
<img alt="" class="two wow fadeInLeft" data-wow-delay=".5s" src="{{BASE}}icons/shape-02_38cee164.svg" width="200"/>
</div>
</div>
</div>
</section>
<!-- wpr banner area end -->
<!-- wpr services area start -->
<section class="wpr-services-area inner mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">SERVICES</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">What We Build</h2>
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
<p class="desc">Multi-tenant, subscription-ready cloud software, architected, built and scaled for reliability.</p>
</div>
<div class="mid">
<h2>01</h2>
</div>
<div class="bottom">
<ul><li>Product &amp; technical architecture</li><li>Multi-tenant &amp; billing systems</li><li>Cloud, DevOps &amp; CI/CD</li><li>Security, uptime &amp; monitoring</li></ul>
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
<p class="desc">Production-grade digital products designed to ship fast and stay easy to maintain.</p>
</div>
<div class="mid">
<h2>02</h2>
</div>
<div class="bottom">
<ul><li>Product strategy &amp; UX</li><li>Rapid prototyping</li><li>Full-stack development</li><li>Maintenance &amp; support</li></ul>
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
<p class="desc">Connected hardware with companion apps and cloud dashboards, secure from edge to cloud.</p>
</div>
<div class="mid">
<h2>03</h2>
</div>
<div class="bottom">
<ul><li>Firmware &amp; embedded software</li><li>Device provisioning &amp; OTA</li><li>Cloud dashboards &amp; telemetry</li><li>Companion mobile apps</li></ul>
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
<p class="desc">Senior engineers, integrations and consulting to take your roadmap from idea to launch.</p>
</div>
<div class="mid">
<h2>04</h2>
</div>
<div class="bottom">
<ul><li>API design &amp; integrations</li><li>Performance &amp; scale audits</li><li>UX/UI &amp; design systems</li><li>Dedicated product teams</li></ul>
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
<div class="section-bottom-content square-dot">
<div class="service-wrapper wow fadeInRight" data-wow-delay=".2s">
<div class="image-area">
<img alt="" src="{{BASE}}img/03_b1c6aef3.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">WORDPRESS THEMES &amp; PLUGINS</p>
<p class="desc">Fast, SEO-friendly WordPress themes and premium plugins built to standards.</p>
</div>
<div class="mid">
<h2>05</h2>
</div>
<div class="bottom">
<ul><li>Custom theme development</li><li>Plugin development</li><li>WooCommerce solutions</li><li>Performance &amp; SEO</li></ul>
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
<img alt="" src="{{BASE}}img/01_5711d4e0.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">MOBILE APP DEVELOPMENT</p>
<p class="desc">Native and cross-platform iOS &amp; Android apps with offline sync and push.</p>
</div>
<div class="mid">
<h2>06</h2>
</div>
<div class="bottom">
<ul><li>Native iOS &amp; Android</li><li>Cross-platform (Flutter)</li><li>Offline-first sync</li><li>Store launch &amp; ASO</li></ul>
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
<img alt="" src="{{BASE}}img/04_65c4c1dc.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">INVENTORY &amp; POS SYSTEMS</p>
<p class="desc">Cloud inventory and POS software for retailers, warehouses and SMBs.</p>
</div>
<div class="mid">
<h2>07</h2>
</div>
<div class="bottom">
<ul><li>Stock &amp; warehouse control</li><li>Supplier management</li><li>Barcode &amp; POS</li><li>Reporting &amp; analytics</li></ul>
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
<img alt="" src="{{BASE}}img/02_a1967011.webp"/>
</div>
<div class="content">
<div class="top">
<p class="tag">ISP MANAGEMENT SOFTWARE</p>
<p class="desc">Billing, subscriber and network management software built for internet providers.</p>
</div>
<div class="mid">
<h2>08</h2>
</div>
<div class="bottom">
<ul><li>Subscriber management</li><li>Billing &amp; invoicing</li><li>RADIUS / network integration</li><li>Customer support portal</li></ul>
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
<!-- wpr pricing plans area start -->
<section class="wpr-pricing-plans-area mb--16" id="pricing">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">PRICING PLANS</p>
<h2 class="section-title second-font font-semi-bold text-normal">Plans That <br/> Fit You Project

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
<h4 class="title h5">Small businesses, startups <br/> <span>or single-brand projects.</span>
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

                                        Absolutely — you don’t need to book a full package. Whether it’s a brand refresh, a website redesign, or UI/UX for a single product, we tailor our approach to match your exact needs and budget.

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

                                        Project timelines depend on the scope — most branding projects take 3–4 weeks, while full website or product design projects typically range from 6–8 weeks. We’ll confirm an exact timeline during the discovery phase.

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

                                        Yes. We collaborate with clients around the world through remote workshops, video calls, and real-time communication tools — ensuring a smooth process regardless of location.

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

                                        Yes. While our core focus is design, we partner with trusted developers to bring your project to life with high-quality, responsive code — ensuring seamless design-to-development handoff.

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

                                        Simply reach out through our contact form or email. We’ll schedule a short discovery call to learn about your goals, then provide a proposal tailored to your needs.

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
