<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
        <title>Document</title>
        
        <?php wp_head(); ?>
        
    </head>
    <body <?php body_class();?> >
        <div class="page">
            <header id="masthead" class="site-header" role="banner">
                <div class="container">
                    
                    <a href="<?php echo esc_url(home_url('/'));?>">
                        <?php // bloginfo('name'); ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg"/>
                    </a>
                    
<!--                    <h2 class="site-description">
                        <?php bloginfo('description'); ?>
                    </h2>-->
                </div>
            </header>
            <div id="contenido" class="container">
        

