<?php

/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WP HEAD SCRIPTS -->

    <?php wp_head(); ?>

    <!-- END WP HEAD SCRIPTS -->

</head>

<body <?php body_class(); ?> class="grid-container">
    <header style="background-color: #232324;">
    <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
    <?php
        wp_nav_menu([
            'theme_location' => 'primary-menu',
            'menu_class' => 'main_menu',
        ]);
    ?>
    <?php echo do_shortcode('[gtranslate]'); ?>
    
    </header>
    
    
    

    