<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="footer-both-wrapper footer-dark">
            <div class="site-footer__top">
                <div class="row">

                    <div class="col-md-2">
                        <div class="widget">
                            <a class="footer-logo"
                                aria-label="wpWax logo"
                                href="<?php echo esc_attr( THEME_HELPGENT_BASE_URL . '/' ); ?>"><?php echo Helper::the_svg( 'footer-logo' ); ?></a>
                            <?php wp_nav_menu(Helper::get_nav_menu_args('footer-helpgent-1')); ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget">
                            <h3 class="widgettitle">Support</h3>
                            <?php wp_nav_menu(Helper::get_nav_menu_args('footer-helpgent-2')); ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget">
                            <h3 class="widgettitle">Company</h3>
                            <?php wp_nav_menu(Helper::get_nav_menu_args('footer-helpgent-3')); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget widget_text footer-updated-text">
                            <h3 class="widgettitle">Keep Updated</h3>
                            <p>Subscribe to our email newsletter to receive updates.</p>
                        </div>
                        <div class="footer-newsletter">
                            <?php echo do_shortcode('[fluentform id="3"]'); ?>
                        </div>
                        <div class="footer-social">
                            <ul class="mb-0 ml-0 icons list-unstyled">
                                <li class="facebook-f" title="Facebook">
                                    <a aria-label="wpwax facebook" target="_blank" href="https://www.facebook.com/wpwax">
                                        <?php echo wpwax_icon( 'uil uil-facebook-f', false); ?>
                                    </a>
                                <li class="twitter" title="Twitter"><a target="_blank"
                                        href="https://twitter.com/wpwaxofficial">
                                        <?php echo wpwax_icon( 'uil uil-twitter', false); ?>
                                    </a></li>
                                <li class="instagram" title="Instagram"><a target="_blank"
                                        href="https://www.instagram.com/wpwaxofficial">
                                        <?php echo wpwax_icon( 'uil uil-instagram', false); ?>
                                    </a></li>
                                <li class="linkedin" title="Linkedin"><a target="_blank"
                                        href="https://www.linkedin.com/company/wpwax">
                                        <?php echo wpwax_icon( 'uil uil-linkedin', false); ?>
                                    </a></li>
                                <li class="wordpress" title="WordPress"><a target="_blank"
                                        href="https://profiles.wordpress.org/wpwax">
                                        <?php echo wpwax_icon( 'uil uil-wordpress', false); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="widget">
                            <h3 class="widgettitle">Products</h3>
                            <ul class="brand-item">
                                <li>
                                    <a href="https://directorist.com/">
                                        <div class="product-img">
                                            <img src="<?php echo Helper::get_svg('directorist.svg');?>" alt="">
                                        </div>
                                        Directorist
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_attr( THEME_HELPGENT_BASE_URL . '/' ); ?>">
                                        <div class="product-img">
                                            <img src="<?php echo Helper::get_svg('helpgent-product.svg');?>" alt="">
                                        </div>
                                        HelpGent
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-of "><span>A product of <a
                                    href="<?php echo home_url(); ?>"><?php echo Helper::the_svg( 'wpwax' ); ?></a></div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright-text">&copy; <?php echo date("Y"); ?> HelpGent. All Rights Reserved.</div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-right footer-navigation">
                            <?php wp_nav_menu(Helper::get_nav_menu_args('footer-helpgent-bottom-right')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>