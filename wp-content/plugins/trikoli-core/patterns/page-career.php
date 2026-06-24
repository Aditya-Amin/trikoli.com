<?php
/**
 * Title: Page — Career
 * Slug: trikoli/page-career
 * Categories: trikoli-pages
 * Description: Page — Career (exact full page body).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
wp_enqueue_style( 'tk-s-about' ); // why-choose-us area uses same section wrapper
wp_enqueue_style( 'tk-s-awards' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<!-- header area end -->
<section class="wpr-banner-area breadcrumb">
<div class="container">
<div class="banner-content-area">
<h1 class="section-title text-normal wow scaleIn" data-wow-delay="1s">Careers at Trikoli</h1>
<p class="desc">Join a senior, remote-first team building SaaS platforms, digital products and IoT devices. We hire for ownership, curiosity and craft.</p>
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
<section class="wpr-why-choose-us-area2 mb--16">
<div class="container">
<div class="section-inner border-1">
<div class="section-title-area">
<p class="sub-title">WHY TRIKOLI</p>
<h2 class="section-title second-font font-semi-bold text-normal">Why You’ll Love <br/> Working Here</h2>
</div>
<div class="bottom-content-area">
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".2s">
<div class="icon">
<img alt="" src="{{BASE}}icons/01_76d014c7.svg"/>
</div>
<div class="text">
<h3 class="h6 title second-font font-semi-bold text-normal">Remote-First Culture</h3>
<p class="desc">Work from anywhere with flexible hours and async-friendly teams across time zones.</p>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".4s">
<div class="icon">
<img alt="" src="{{BASE}}icons/02_2435b19e.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Learning &amp; Growth</h2>
<p class="desc">An annual budget for courses, conferences and certifications, plus mentorship from senior engineers.</p>
</div>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".6s">
<div class="icon">
<img alt="" src="{{BASE}}icons/03_1089af41.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Health &amp; Wellbeing</h2>
<p class="desc">Health coverage, generous paid time off and a culture that respects work-life balance.</p>
</div>
<span class="square-shape top-right"></span>
</div>
<div class="why-choose-wrapper2 square-dot wow fadeInRight" data-wow-delay=".8s">
<div class="icon">
<img alt="" src="{{BASE}}icons/04_845d6eb8.svg"/>
</div>
<div class="text">
<h2 class="h6 title second-font font-semi-bold text-normal">Real Ownership</h2>
<p class="desc">Ship products used by real customers across SaaS, digital products and IoT — and own your impact.</p>
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
<section class="wpr-awards-area mb--16">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-title-area">
<p class="sub-title">RECOGNITION</p>
<h2 class="section-title second-font font-semi-bold text-normal wpr-text-anime-style-1">A Team That’s Recognized</h2>
</div>
<div class="award-accordion-area">
<div class="award-item active">
<div class="award-header">
<div class="left">
<div class="date">2025</div>
<div class="content">
<h3 class="h6 title">Great Place to Work — Certified</h3>
<p class="desc">Recognized for our remote-first culture, transparency and the way our teams collaborate across SaaS, products and IoT.</p>
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
<div class="date">2025</div>
<div class="content">
<h3 class="h6 title">Top Product Team — Tech Excellence Awards</h3>
<p class="desc">Honored for shipping reliable, customer-loved products and for our engineering and design craft.</p>
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
<div class="date">2024</div>
<div class="content">
<h3 class="h6 title">Best SaaS Startup — Cloud Innovation Awards</h3>
<p class="desc">Awarded for the scalability, security and uptime of our SaaS platforms.</p>
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
<div class="date">2024</div>
<div class="content">
<h3 class="h6 title">Engineering Excellence — DevHonors</h3>
<p class="desc">Acknowledged for our IoT and platform engineering and our commitment to quality.</p>
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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
