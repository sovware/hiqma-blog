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
    
    <!-- Pixel Code for https://robiulislams3.sg-host.com/ -->
<script defer src="https://robiulislams3.sg-host.com/pixel/P0GAqyu0Z25dZaxfBiwA8AU1yD5Eokus"></script>
<!-- END Pixel Code -->      

</head>

<body <?php body_class(); ?>>
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
                <?php get_template_part( 'template-parts/content-header' ); ?>
            </div>
        </header>
        <div id="content" class="site-content">