<?php
/**
 * Title: Section — Awards
 * Slug: trikoli/awards
 * Categories: trikoli-sections
 * Description: Awards section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-awards' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
