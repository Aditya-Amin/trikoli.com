<?php
/**
 * Title: Page — Products
 * Slug: trikoli/page-products
 * Categories: trikoli-pages
 * Description: Page — Products (exact full page body).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_style( 'tk-s-projects' ); // pulls in tk-swiper-css
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

                    Our Products In Action <br/> Built by Trikoli

                </h1>
<p class="desc">From SaaS platforms to digital products and IoT devices, we build software people rely on.

                    design. <br/>

                    Explore a selection of products designed, built and supported by Trikoli. </p>
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
<!-- wpr project area start -->
<section class="wpr-project-area mb--16 inner">
<div class="container">
<div class="section-inner border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">PRODUCTS</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">Our Products</h2>
</div>
</div>
<div class="project-slider-inner">
<div class="project-wrapper2">
<div class="image-area">
<a class="over-link" href="/products/"></a>
<img alt="" class="video-img" src="{{BASE}}img/01_bb700101.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left-w_f699d9e1.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right-w_379455d6.svg" width="120"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">TrikoliFlow</a>
</h3>
<p class="desc">A workflow and operations automation SaaS with dashboards, integrations and role-based access for growing teams.</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>99.9%</h4>
<p>Uptime SLA</p>
</li>
<li>
<h4>5k+</h4>
<p>Active teams</p>
</li>
<li>
<h4>4.8</h4>
<p>User rating</p>
</li>
</ul>
</div>
</div>
<div class="button-area">
<div class="box"></div>
<a href="/products/">

                                    VIEW PROJECTS

                                    <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="project-wrapper2">
<div class="image-area">
<a class="over-link" href="/products/"></a>
<img alt="" class="video-img" src="{{BASE}}img/02_0e716b77.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left-w_f699d9e1.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right-w_379455d6.svg" width="120"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Trikoli ISP</a>
</h3>
<p class="desc">Billing, subscriber and network management software built for internet service providers and network operators.</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>120+</h4>
<p>ISPs served</p>
</li>
<li>
<h4>1M+</h4>
<p>Subscribers</p>
</li>
<li>
<h4>24/7</h4>
<p>Support</p>
</li>
</ul>
</div>
</div>
<div class="button-area">
<div class="box"></div>
<a href="/products/">

                                    VIEW PROJECTS

                                    <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="project-wrapper2">
<div class="image-area">
<a class="over-link" href="/products/"></a>
<img alt="" class="video-img" src="{{BASE}}img/03_17ef53f9.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left-w_f699d9e1.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right-w_379455d6.svg" width="120"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Trikoli Theme Suite</a>
</h3>
<p class="desc">A collection of fast, SEO-friendly WordPress themes and premium plugins for business and product sites.</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>30+</h4>
<p>Themes &amp; plugins</p>
</li>
<li>
<h4>50k+</h4>
<p>Installs</p>
</li>
<li>
<h4>4.9</h4>
<p>Avg. rating</p>
</li>
</ul>
</div>
</div>
<div class="button-area">
<div class="box"></div>
<a href="/products/">

                                    VIEW PROJECTS

                                    <svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0V13.4751H16.5083V2.53591L1.0442 18L0 16.9061L15.4144 1.49171H4.47514V0H18Z" fill="#2F6BE0"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="project-wrapper2">
<div class="image-area">
<a class="over-link" href="/products/"></a>
<img alt="" class="video-img" src="{{BASE}}img/08_0859823d.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left-w_f699d9e1.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right-w_379455d6.svg" width="120"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Trikoli Stock</a></h3>
<p class="desc">Cloud inventory and POS for retailers and warehouses, with stock control, suppliers, barcode and reporting.</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>2k+</h4>
<p>Stores</p>
</li>
<li>
<h4>99.9%</h4>
<p>Uptime</p>
</li>
<li>
<h4>+30%</h4>
<p>Efficiency</p>
</li>
</ul>
</div>
</div>
<div class="button-area">
<div class="box"></div>
<a href="/products/">VIEW PROJECTS</a>
</div>
</div>
</div>
<div class="project-wrapper2">
<div class="image-area">
<a class="over-link" href="/products/"></a>
<img alt="" class="video-img" src="{{BASE}}img/10_e33be7b8.webp"/>
<img alt="" class="shape top-left-shape" src="{{BASE}}icons/shape-top-left-w_f699d9e1.svg"/>
<img alt="" class="shape top-right-shape" src="{{BASE}}icons/shape-top-right-w_379455d6.svg" width="120"/>
</div>
<div class="slide-content">
<div class="product-intro">
<div class="top">
<h3 class="title"><a href="/products/">Trikoli Sense</a></h3>
<p class="desc">IoT gateway and sensor devices with a cloud dashboard, OTA updates and real-time telemetry from edge to cloud.</p>
</div>
<div class="bottom">
<ul>
<li>
<h4>100k+</h4>
<p>Devices online</p>
</li>
<li>
<h4>&lt;50ms</h4>
<p>Telemetry latency</p>
</li>
<li>
<h4>OTA</h4>
<p>Secure updates</p>
</li>
</ul>
</div>
</div>
<div class="button-area">
<div class="box"></div>
<a href="/products/">VIEW PROJECTS</a>
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
</div>
</section>
<!-- wpr project area end -->
<!-- wpr delay stats area start -->
<section class="wpr-delay-stats-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title delay-stats-badge">Why Delay Hurts</p>
<h2 class="section-title second-font font-semi-bold text-normal">The longer you wait, <br/> the harder it

                            is to catch up.</h2>
</div>
</div>
<div class="section-mid-area">
<div class="delay-stats-rows">
<div class="delay-stats-row">
<div class="delay-stats-label">
<span class="index">/ 01</span>
<h3 class="title second-font font-semi-bold">Manual Operations Slow Progress</h3>
</div>
<div class="delay-stats-bar-column">
<div class="top">
<span class="suffix">/Workload</span>
<span class="pct">80%</span>
</div>
<div class="delay-stats-track">
<div aria-label="Manual operations workload" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="delay-stats-fill" data-progress="80" role="progressbar">
</div>
</div>
</div>
</div>
<div class="delay-stats-row">
<div class="delay-stats-label">
<span class="index">/ 02</span>
<h3 class="title second-font font-semi-bold">Competitors Outpace Innovation</h3>
</div>
<div class="delay-stats-bar-column">
<div class="top">
<span class="suffix">/Growth</span>
<span class="pct">65%</span>
</div>
<div class="delay-stats-track">
<div aria-label="Competitor growth pace" aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="delay-stats-fill" data-progress="65" role="progressbar">
</div>
</div>
</div>
</div>
<div class="delay-stats-row">
<div class="delay-stats-label">
<span class="index">/ 03</span>
<h3 class="title second-font font-semi-bold">Automation Potential Remains Untapped</h3>
</div>
<div class="delay-stats-bar-column">
<div class="top">
<span class="suffix">/Opportunities</span>
<span class="pct">70%</span>
</div>
<div class="delay-stats-track">
<div aria-label="Automation opportunities" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="delay-stats-fill" data-progress="70" role="progressbar">
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
<!-- wpr delay stats area end -->
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
