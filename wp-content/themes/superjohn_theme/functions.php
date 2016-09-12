<?php

    if ( ! isset( $content_width ) ) {

        $content_wideth = 600 ;

    }

    function SfvUrologyAssociates_setup() {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'SfvUrologyAssociates_setup');

    function my_scripts() {

        /* add styles */
        wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/bootstrap.min.css') ;
        wp_enqueue_style( 'revolution-slider', get_template_directory_uri() . '/revolution-slider.css') ;
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css') ;
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css') ;
        wp_enqueue_style( 'bootstrap-margin-padding', get_template_directory_uri() . '/bootstrap-margin-padding.css') ;

        /* add scripts */
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
        wp_enqueue_script( 'js/respond', get_template_directory_uri() . '/js/respond.js', array('jquery'), true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    }

    add_action('wp_enqueue_style', 'my_scripts');
    add_action('wp_enqueue_scripts', 'my_scripts');

?>
