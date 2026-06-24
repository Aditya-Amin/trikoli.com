<?php
/**
 * Title: Footer — Default
 * Slug: trikoli/footer
 * Categories: trikoli-footers
 * Description: Exact footer.
 *
 * @package TrikoliCore
 */
wp_enqueue_style( 'tk-s-footer' );
wp_enqueue_script( 'tk-main' );
$u = esc_url( get_template_directory_uri() . '/assets/vendor/' );
$html = <<<'TKHTML'
<!-- wp:html -->
<div class="wpr-footer-area">
<div class="container">
<div class="section-inner border-1">
<div class="footer-top"><ul><li><a href="/about/">About</a></li><li class="square-dot"></li><li><a href="/services/">Services</a></li><li class="square-dot"></li><li><a href="/products/">Products</a></li><li class="square-dot"></li><li><a href="/career/">Career</a></li><li class="square-dot"></li><li><a href="/contact/">Contact</a></li></ul></div>
<div class="footer-logo-area square-dot">
<a href="/"><img alt="Trikoli" src="{{BASE}}img/trikoli-logo-footer.png" width="600" height="150"/></a>
<div class="shape one"><img alt="" src="{{BASE}}icons/shape-01_56528e38.svg"/></div>
<div class="shape two"><img alt="" src="{{BASE}}icons/shape-02_52cc054d.svg"/></div>
<span class="square-shape top-left"></span>
<span class="square-shape top-right"></span>
<span class="square-shape bottom-left"></span>
<span class="square-shape bottom-right"></span>
</div>
<div class="copyright-area">
<div class="left-social-area"><ul><li><a href="https://www.linkedin.com">LinkedIn</a></li><li><a href="https://github.com">GitHub</a></li><li><a href="https://x.com">X / Twitter</a></li><li><a href="https://dribbble.com">Dribbble</a></li></ul></div>
<p class="copyright">

                        ©

                        <script>

                            document.write(

                                new Date().getFullYear()

                            )

                        </script> Trikoli. All Rights Reserved

                    </p>
<button class="scroll-top-btn">

                        Back to Top

                        <svg fill="none" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
<path d="M8 3.29688L7.64062 3.64062L1.39062 9.89062L2.10938 10.6094L8 4.71875L13.8906 10.6094L14.6094 9.89062L8.35938 3.64062L8 3.29688Z" fill="black"></path>
</svg>
</button>
</div>
</div>
</div>
</div>
<!-- /wp:html -->
TKHTML;
echo str_replace( '{{BASE}}', $u, $html );
