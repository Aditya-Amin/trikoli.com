<?php
/**
 * Title: Section — Testimonials
 * Slug: trikoli/testimonials
 * Categories: trikoli-sections
 * Description: Testimonials section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-testimonials' ); // pulls in tk-swiper-css
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
