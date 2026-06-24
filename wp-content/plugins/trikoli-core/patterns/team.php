<?php
/**
 * Title: Section — Team
 * Slug: trikoli/team
 * Categories: trikoli-sections
 * Description: Team section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-team' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
