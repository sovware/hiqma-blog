<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<div class="contact-form-box__header">
    <div class="contact-form-box__tab">
        <nav>
            <ul class="formbox-tabmenu nav list-unstyled ml-0 mb-0" role="tablist">
                <li class="formbox-tabmenu__item">
                    <a id="technical_support-tab" class="active" data-toggle="tab" href="#technical_support" role="tab" aria-controls="technical_support" aria-selected="false">
                        <?php echo Helper::the_svg('icons/user-code'); ?>
                        <span class="formbox-tabmenu__text">Technical Support</span>
                    </a>
                </li>
                <li class="formbox-tabmenu__item">
                    <a id="pre-sale-tab" data-toggle="tab" href="#pre_sale" role="tab" aria-controls="pre_sale" aria-selected="false">
                        <?php echo Helper::the_svg('icons/bin'); ?>
                        <span class="formbox-tabmenu__text">Pre-sale Question</span>
                    </a>
                </li>
                <li class="formbox-tabmenu__item">
                    <a id="feature_request-tab" data-toggle="tab" href="#feature_request" role="tab" aria-controls="feature_request" aria-selected="false">
                        <?php echo Helper::the_svg('icons/hand-star'); ?>
                        <span class="formbox-tabmenu__text">Feature Request</span>
                    </a>
                </li>
                <li class="formbox-tabmenu__item">
                    <a id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">
                        <?php echo Helper::the_svg('icons/info-list'); ?>
                        <span class="formbox-tabmenu__text">Other</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="contact-form-box__body">
    <div class="contact-form-content tab-content">
        <div class="tab-pane fade active show" id="technical_support" role="tabpanel" aria-labelledby="technical_support-tab">
            <?php echo do_shortcode('[contact-form-7 id="641" title="Technical Support"]'); ?>
        </div>
        <div class="tab-pane fade" id="pre_sale" role="tabpanel" aria-labelledby="pre-sale-tab">
            <?php echo do_shortcode('[contact-form-7 id="643" title="Pre-Sale"]'); ?>
        </div>
        <div class="tab-pane fade" id="feature_request" role="tabpanel" aria-labelledby="feature_request-tab">
            <?php echo do_shortcode('[contact-form-7 id="643" title="Pre-Sale"]'); ?>
        </div>
        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
            <?php echo do_shortcode('[contact-form-7 id="747" title="Other"]'); ?>
        </div>
    </div>
</div>