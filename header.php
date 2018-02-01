<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
        <?php
        #twitter cards hack
        if(is_single() || is_page()) {
            $twitter_url    = get_permalink();
            $twitter_title  = get_the_title();
            $twitter_desc   = get_the_excerpt();
            $twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
            $twitter_thumb  = $twitter_thumbs[0];
            if(!$twitter_thumb) {
                $twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
            }
           
        ?>
            <meta name="twitter:card" value="summary" />
            <meta name="twitter:url" value="<?php echo $twitter_url; ?>" />
            <meta name="twitter:title" value="<?php echo $twitter_title; ?>" />
            <meta name="twitter:description" value="<?php echo $twitter_desc; ?>" />
            <meta name="twitter:image" value="<?php echo $twitter_thumb; ?>" />
            <meta name="twitter:site" value="@libdemvoice" />
            <?php
            if($twitter_name) {
            ?>
            <meta name="twitter:creator" value="@<?php echo $twitter_name; ?>" />
            <?php
            }
        }
        ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper" class="hfeed">
            <header id="header" role="banner">
            <section id="branding">
                <div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
            </section>
            <nav id="menu" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            </header>
            <div id="container">