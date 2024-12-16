<?php

    if(!function_exists('neogym_bootstrapping')){
        function neogym_bootstrapping()
        {
            load_theme_textdomain('neogym');
            add_theme_support('post-thumbnails');
            add_theme_support('post-formats', ['aside', 'gallery', 'quote', 'image', 'video']);
        }
    }
    
    add_action('after_setup_theme', 'neogym_bootstrapping');

    //excerpt custom length
    // if(!function_exists('neogym_custom_excerpt_length')){
    //     function neogym_custom_excerpt_length($length)
    //     {
    //         return 5;
    //     }
    // }

    // add_filter('excerpt_length', 'neogym_custom_excerpt_length');
    function get_custom_excerpt($limit) {
        $excerpt = wp_trim_words(get_the_excerpt(), $limit);
        return $excerpt;
    }
    