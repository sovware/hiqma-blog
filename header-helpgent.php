<?php
/**
 * @author  Sovware
 * @since   1.0
 * @version 1.0
 */

namespace Sovware\Theme;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'helpgent-dedicated-page trheader' ); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <div class="shade"></div>
        <div class="offcanvas-menu">
            <div class="offcanvas-cancel">
                <?php echo wpwax_icon( 'uil uil-times', false); ?>
            </div>
            <div class="offcanvas-menu-inner">
            </div>
        </div>
        <header id="site-header" class="site-header" data-headroom>
            <div class="container">
                <?php get_template_part( 'template-parts/content-header-helpgent' ); ?>
            </div>
        </header>
        <div id="content" class="site-content">