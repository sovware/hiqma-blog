<?php
/**
 * Template Name: Refund Policy Page
 *
 * @author  AazzTech
 * @since   1.0
 * @version 1.0
 */

namespace AazzTech\DirTheme;
?>
<?php get_header(); ?>

<section class="refund-policy-intro policy-page-intro">
    <div class="container">
        <div class="row">
            <div class="text-center col-12">
                <h1 class="mb-0 display-2 pt-140 pb-60">Refund Policy</h1>
            </div>
        </div>
    </div>
</section>

<div class="refund-policy-content-araea pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="policy-text content-box">
                    <div class="content-box__block">
                        <p>You are eligible to request a refund if you think our products and services don’t serve your needs and are still within the first 14 days of the original purchase date. We will fulfill your request and no questions will be asked!</p>

                        <p>However, there are few things to note</p>

                        <ul class="ml-0 list-unstyled mb-25 policy-list">
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">We request you to let us know the issues you are having and provide  the opportunity to resolve.</span>
                            </li>
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">We might ask you for your feedback and suggestions for product  improvement.</span>
                            </li>
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">We would appreciate if you share the reason for the refund.</span>
                            </li>
                        </ul>
                        <p>Yes, you need to submit a request to have a refund <a target="__blank" href="<?php echo THEME_CONTACT_URL;?>">through support channel</a>. Note that, lifetime plans don’t come with any limitations therefore, to avoid misuse of the product we do not honor refund requests for lifetime plans.</p>

                        <p><strong>Cases we don’t honor refunds</strong></p>

                        <ul class="ml-0 list-unstyled mb-25 policy-list">
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">After the first 14 days of purchase.</span>
                            </li>
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">For lifetime plans</span>
                            </li>
                            <li>
                                <?php echo wpwax_icon( 'uil uil-check',false, 'color-success'); ?>
                                <span class="content-text">If you threaten us, evince disloyalty or misuse our products.</span>
                            </li>
                        </ul>
                        <p>Due to the possibility of product misuse even after issuing a refund and the substantial gateway charges associated with refunding lifetime deals, lifetime deals are not eligible for refunds.</p>
                        <p><strong>Refund Time</strong></p>

                        <p>We try to process the refund at our earliest convenience and once we process, the amount should re-appear in your bank account within 7 business days of the issue date (It may take a few hours to 7 business days depending on the time required by banks to transfer the refund).</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>