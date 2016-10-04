<?php

    if ( ! isset( $content_width ) ) {

        $content_width = 600 ;

    }

    function short_excerpt( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'short_excerpt', 999 );






    function SfvUrologyAssociates_setup() {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' );

        /// Register Custom Navigation Walker
        require_once('wp_bootstrap_navwalker.php') ;

        register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'superjohn_theme' ),
        'footer' => __( 'Footer Menu', 'superjohn_theme' ),
        'footer2' => __( 'Footer Menu 2', 'superjohn_theme' ),
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
        wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover.css', array(), null, 'all') ;
        wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), null, 'all') ;
        wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.css', array(), null, 'all') ;
        wp_enqueue_style( 'flat-icon', get_template_directory_uri() . '/css/flaticon.css', array(), null, 'all') ;
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), null, 'all') ;

        /* add scripts */
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
        wp_enqueue_script( 'js/respond', get_template_directory_uri() . '/js/respond.js', array('jquery'), true );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );
        wp_enqueue_script( 'font-awesome-js', 'https://use.fontawesome.com/1d5d687778.js', array('jquery'), true );
        wp_enqueue_script( 'bx-slider', get_template_directory_uri() . '/js/bxslider.js', array('jquery'), true );
        wp_enqueue_script( 'calendar-events-data', get_template_directory_uri() . '/js/calendar-events-data.js', array('jquery'), true );
        wp_enqueue_script( 'fullcalendar', get_template_directory_uri() . '/js/fullcalendar.js', array('jquery'), true );
        wp_enqueue_script( 'jquery-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), true );
        wp_enqueue_script( 'jquery-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), true );
        wp_enqueue_script( 'jquery-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), true );
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array('jquery'), true );
        wp_enqueue_script( 'jquery-parallax', get_template_directory_uri() . '/js/jquery-parallax.js', array('jquery'), true );
        wp_enqueue_script( 'revolution-js', get_template_directory_uri() . '/js/revolution.min.js', array('jquery'), true );
        wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), true );
        wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/validate.js', array('jquery'), true );
        wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), true );


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