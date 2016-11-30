<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/assets/favicon.png">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= get_template_directory_uri() ?>/assets/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i" rel="stylesheet">

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>
</head>

<body <?php body_class(); ?> id="body">

<div id="site-container" class="site-container">

    <?php get_sidebar('rightHandRail'); ?>

    <header class="site-header">
        <div class="site-header--inner">
            <div class="container clearfix">
                <a href="/" class="logo"><img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="norstone" title="norstone"/></a>

                <div class="site-menu-wrapper">

                    <nav class="site-menu">
                        <div class="main-menu-wrap">
                            <div class="main-menu--toggle-wrap">
                                <a href="javascript:void(0);"
                                   class="main-menu--toggle">Products <i class="fa fa-angle-down"></i></a>
                                <span></span>
                            </div>

                            <?php
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'main-menu',
                                    'container' => 'ul'
                                ));

                            } ?>

                        </div>
                    </nav>


                    <div class="right-rail-menu">
                        <a class="site-rail-menu--toggle"
                           href="javascript:void(0);">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </header>

    <div class="site-wrapper">


