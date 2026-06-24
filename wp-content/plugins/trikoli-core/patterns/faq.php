<?php
/**
 * Title: Section — FAQ
 * Slug: trikoli/faq
 * Categories: trikoli-sections
 * Description: FAQ section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-faq' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
