<?php

    if ( ! isset( $content_width ) ) {

        $content_width = 600 ;

    }


    function SfvUrologyAssociates_setup() {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );

        /// Register Custom Navigation Walker
        require_once('wp_bootstrap_navwalker.php') ;

        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'superjohn_theme' ),
        'footer' => __( 'Footer Menu', 'superjohn_theme' ),
                            ) );
    }

    add_action('after_setup_theme', 'SfvUrologyAssociates_setup');

    function my_scripts() {

        /* add styles */
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), null, 'all') ;
        wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/bootstrap.min.css', array(), null, 'all') ;
        wp_enqueue_style( 'revolution-slider', get_template_directory_uri() . '/revolution-slider.css', array(), null, 'all') ;

        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css', array(), null, 'all') ;
        wp_enqueue_style( 'bootstrap-margin-padding', get_template_directory_uri() . '/bootstrap-margin-padding.css') ;
        wp_enqueue_style( 'medical-font-icons', get_template_directory_uri() . '/css/medical-font-icons.css') ;
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'all') ;

        /* add scripts */
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
        wp_enqueue_script( 'js/respond', get_template_directory_uri() . '/js/respond.js', array('jquery'), true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
    }


    add_action('wp_enqueue_style', 'my_scripts');
    add_action('wp_enqueue_scripts', 'my_scripts');

?>

        <?php
        /**
         * Register our sidebars and widgetized areas.
         *
         */
        function arphabet_widgets_init() {

            register_sidebar( array(
                'name'          => 'Patient Information Sidebar',
                'id'            => 'patient_information_sidebar',
                'before_widget' => '<div>',
                'after_widget'  => '</div>',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>',
            ) );

        }
        add_action( 'widgets_init', 'arphabet_widgets_init' );
        ?>