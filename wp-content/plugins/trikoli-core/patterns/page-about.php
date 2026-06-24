<?php
/**
 * Title: Page — About
 * Slug: trikoli/page-about
 * Categories: trikoli-pages
 * Description: Page — About (exact full page body).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_style( 'tk-s-about' );
wp_enqueue_style( 'tk-s-brand' );
wp_enqueue_style( 'tk-s-process' );
wp_enqueue_style( 'tk-s-team' );
wp_enqueue_style( 'tk-s-awards' );
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

                    Trikoli Empowering <br/> Digital Innovation

                </h1>
<p class="desc"> We turn ideas into meaningful digital experiences through thoughtful strategy and

                    refined design. <br/>

                    Our approach blends creativity, technology, and purpose to build brands that last.</p>
<div class="bg-shape">
<img alt="" src="{{BASE}}icons/bg-shape_a5e2123d.svg"/>
</div>
<div class="banner-shape-area">
<img alt="" class="one wow fadeInLeft" data-wow-delay=".5s" src="{{BASE}}icons/shape-01_e62eff28.svg" width="200"/>
<img alt="" class="two wow fadeInRight" data-wow-delay=".5s" src="{{BASE}}icons/shape-02_38cee164.svg" width="220"/>
</div>
</div>
</div>
</section>
<!-- wpr banner area end -->
<!-- wpr about area start -->
<section class="wpr-about-area mb--16">
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
<h2 class="h4 title"><span class="odometer second-font font-semi-bold" data-count="300">00</span>%</h2>
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
<!-- our approch area start -->
<div class="our-approch-area-style-one mb--16">
<div class="container">
<div class="section-inner bg-white square-dot">
<div class="row">
<div class="col-lg-7">
<!-- approach area left start -->
<div class="approch-area-left">
<div class="section-title-area">
<p class="sub-title">Our Approach</p>
<h2 class="section-title second-font font-semi-bold text-normal quote">Expertise

                                    in Strategy, <br/> Design

                                    and Development</h2>
</div>
<p class="disc">

                                The digital agency work process may vary depending on the <br/> specific project and

                                client needs, but typically follows these <br/> basic steps. It is a collaborative and

                                iterative process.

                            </p>
<a class="wpr-btn btn-primary with-icon" href="/services/">
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

                                Explore Our Service

                            </a>
</div>
<!-- approach area left end -->
</div>
<div class="col-lg-5 rts-slide-left-gsap mt_sm--30">
<!-- single approch area start -->
<div class="single-approach-area-start">
<div class="left-area">
<h3 class="title">Discover &amp; Define</h3>
<p class="disc">Based on the information gathered during discovery <br/>

                                    the agency will develop a customized audience.</p>
</div>
</div>
<!-- single approch area end -->
<!-- single approch area start -->
<div class="single-approach-area-start two">
<div class="left-area">
<h3 class="title">Concept &amp; Strategy</h3>
<p class="disc">Based on insights uncovered during discovery, <br/> the agency defines a

                                    clear strategic direction.</p>
</div>
</div>
<!-- single approch area end -->
<!-- single approch area start -->
<div class="single-approach-area-start three mb--0">
<div class="left-area">
<h3 class="title">Design &amp; Develop</h3>
<p class="disc">Based on the finalized strategy, develops <br/> functional and optimized

                                    digital experiences.</p>
</div>
</div>
<!-- single approch area end -->
</div>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
</div>
</div>
<!-- our approch area end -->
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
<p class="designation">Founder & CEO</p>
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
<p class="designation">VP of Engineering</p>
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
<p class="designation">Head of SaaS Platforms</p>
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
<p class="designation">Lead Product Designer</p>
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
<p class="designation">IoT Hardware Lead</p>
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
<p class="designation">Mobile Apps Lead</p>
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
<p class="designation">Head of Digital Products</p>
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
<span class="fixed-arrow">
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
