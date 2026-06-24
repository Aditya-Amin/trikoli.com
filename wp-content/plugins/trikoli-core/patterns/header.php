<?php
/**
 * Title: Header — Default
 * Slug: trikoli/header
 * Categories: trikoli-headers
 * Description: Exact header.
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-header' ); // pulls in tk-metismenu-css
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<header class="header-style-one">
<div class="header-top">
<div class="header-top-inner">
<div class="left-icon"><img alt="" src="{{BASE}}icons/green-left_750e779c.svg"/></div>
<p class="text">BUILDING SAAS, DIGITAL PRODUCTS &amp; <span>IOT, END TO END</span></p>
<div class="right-icon"><img alt="" src="{{BASE}}icons/green-right_c5e5d2a7.svg"/></div>
</div>
</div>
<div class="container">
<div class="header-style-one-wrapper">
<div class="left-area square-dot">
<div class="logo-area">
<a class="logo" href="/">
<img alt="logo" src="{{BASE}}img/trikoli-logo.png"/>
</a>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<nav class="main-nav-area"><ul class="list-unstyled wpr-desktop-menu"><li class="menu-item active"><a class="main-element" href="/">HOME</a></li><li class="menu-item"><a class="main-element" href="/about/">ABOUT</a></li><li class="menu-item"><a class="main-element" href="/services/">SERVICES</a></li><li class="menu-item"><a class="main-element" href="/products/">PRODUCTS</a></li><li class="menu-item"><a class="main-element" href="/career/">CAREER</a></li><li class="menu-item"><a class="main-element" href="/contact/">CONTACT</a></li></ul></nav>
<div class="button-area-start square-dot">
<a class="wpr-btn btn-primary" href="/contact/">

                        Start a Project

                    </a>
<div class="menu-btn d-flex d-lg-none d-md-flex d-sm-flex" id="menu-btn">
<span class="line one"></span>
<span class="line two"></span>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="side-bar" id="side-bar">
<div class="sidebar-inner">
<!-- mobile menu area start -->
<div class="mobile-menu-main">
<nav class="nav-main mainmenu-nav">
<ul class="list-unstyled wpr-desktop-menu" id="mobile-menu"><li class="menu-item"><a class="main-element" href="/">HOME</a></li><li class="menu-item"><a class="main-element" href="/about/">ABOUT</a></li><li class="menu-item"><a class="main-element" href="/services/">SERVICES</a></li><li class="menu-item"><a class="main-element" href="/products/">PRODUCTS</a></li><li class="menu-item"><a class="main-element" href="/career/">CAREER</a></li><li class="menu-item"><a class="main-element" href="/contact/">CONTACT</a></li></ul>
</li>
<!-- PROJECTS -->
<li class="menu-item">
<button aria-controls="workMenu" aria-expanded="false" class="main-element collapsed w-100 text-start bg-transparent border-0" data-bs-target="#workMenu" data-bs-toggle="collapse">

                                            WORKS

                                        </button>
<ul class="collapse list-unstyled ps-3" data-bs-parent="#mobile-menu" id="workMenu">
<li><a class="sub-menu" href="work.html">WORKS</a></li>
<li><a class="sub-menu" href="work-details.html">WORK SINGLE</a></li>
</ul>
</li>
<!-- PROJECTS -->
<li class="menu-item">
<button aria-controls="blogMenu" aria-expanded="false" class="main-element collapsed w-100 text-start bg-transparent border-0" data-bs-target="#blogMenu" data-bs-toggle="collapse">

                                            BLOG

                                        </button>
<ul class="collapse list-unstyled ps-3" data-bs-parent="#mobile-menu" id="blogMenu">
<li><a class="sub-menu" href="blog-standard.html">BLOG STANDARD</a></li>
<li><a class="sub-menu" href="blog-two-columns.html">BLOG GRID 2</a></li>
<li><a class="sub-menu" href="blog-three-columns.html">BLOG GRID 3</a></li>
<li><a class="sub-menu" href="blog-single.html">BLOG SINGLE</a></li>
</ul>
</li>
<!-- CONTACT -->
<li class="menu-item">
<a class="main-element" href="/contact/">CONTACT</a>
</li>
</ul>
</nav>
</div>
<!-- mobile menu area end -->
<div class="button-area">
<a class="wpr-btn btn-primary" href="/contact/">

                                Contact

                            </a>
</div>
</div>
</div>
</div>
</div>
</header>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
