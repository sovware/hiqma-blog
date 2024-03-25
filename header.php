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
<!-- <script defer src="https://robiulislams3.sg-host.com/pixel/P0GAqyu0Z25dZaxfBiwA8AU1yD5Eokus"></script> -->
<!-- END Pixel Code -->      

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <?php get_template_part( 'template-parts/content-header' ); ?>
        <div id="content" class="site-content">