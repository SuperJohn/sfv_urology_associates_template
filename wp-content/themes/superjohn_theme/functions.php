<?php

    if ( ! isset( $content_width ) ) {

        $content_wideth = 600 ;

    }

    function SfvUrologyAssociates_setup() {

        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'SfvUrologyAssociates_setup');
?>