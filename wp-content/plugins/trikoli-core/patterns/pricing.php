<?php
/**
 * Title: Section — Pricing Plans
 * Slug: trikoli/pricing
 * Categories: trikoli-sections
 * Description: Pricing Plans section (exact design).
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-pricing' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<section class="wpr-pricing-plans-area mb--16" id="pricing">
<div class="container">
<div class="section-inner bg-white border-1">
<div class="section-top-area">
<div class="section-title-area center-style">
<p class="sub-title">PRICING PLANS</p>
<h2 class="section-title second-font font-semi-bold text-normal">Plans That Fit Your Roadmap

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
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
