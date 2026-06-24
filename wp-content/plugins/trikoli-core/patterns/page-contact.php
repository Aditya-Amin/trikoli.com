<?php
/**
 * Title: Page — Contact
 * Slug: trikoli/page-contact
 * Categories: trikoli-pages
 * Description: Page — Contact (exact full page body).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-hero' );
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
<h1 class="section-title text-normal wow scaleIn" data-wow-delay="1s">

                    Get In Touch

                </h1>
<p class="desc">Tell us about your SaaS, digital product or IoT project, and let’s turn your idea <br/> into

                    a product your customers rely on</p>
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
<!-- wpr contact area start -->
<section class="wpr-get-in-touch inner mb--16">
<div class="container">
<div class="section-inner border-1 square-dot">
<div class="row g-5 mb--60">
<div class="col-lg-4 col-md-6 col-sm-6 md-mb-24">
<div class="box-contact-item text-center effectFade fadeUp">
<i class="icon fa-regular fa-envelope"></i>
<h2 class="h6 title fw-semibold">E-mail address</h2>
<a class="text" href="mail:hello@trikoli.com">

                                hello@trikoli.com

                            </a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 md-mb-24">
<div class="box-contact-item text-center effectFade fadeUp" data-delay="0.1">
<i class="icon fa-regular fa-headset"></i>
<h2 class="h6 title fw-semibold">Phone number</h2>
<a class="text" href="tel:+15550872200">

                                (+1) 555 087 2200

                            </a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="box-contact-item text-center effectFade fadeUp" data-delay="0.2">
<i class="icon fa-regular fa-location-dot"></i>
<h2 class="h6 title fw-semibold">Our Location</h2>
<p class="text">

                                Banani, Dhaka – Bangladesh

                            </p>
</div>
</div>
</div>
<!-- map -->
<div class="wpr-map box-contact-item">
<iframe allowfullscreen="" height="660" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://maps.google.com/maps?q=Banani,%20Dhaka,%20Bangladesh&amp;z=13&amp;output=embed" style="border:0;">
</iframe>
</div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape bottom-right"></span>
</div>
</div>
</section>
<!-- wpr contact area end -->
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
<p class="sub-title">OFFICES</p>
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
