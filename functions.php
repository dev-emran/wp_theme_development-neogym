<?php

if (!function_exists('neogym_bootstrapping')) {
    function neogym_bootstrapping()
    {
        load_theme_textdomain('neogym');
        add_theme_support('post-thumbnails', ['post']);
        add_theme_support('post-formats', ['aside', 'gallery', 'quote', 'image', 'video']);
        register_nav_menus(
            [
                'main_menu' => __('Main Menu', 'neogym'),
            ]
        );
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
function get_custom_excerpt($limit)
{
    $excerpt = wp_trim_words(get_the_excerpt(), $limit);
    return $excerpt;
}

/* This code snippet is defining a function `neogym_add_custom_class_to_main_menu` that is used as a
filter callback to add custom classes to the main menu items in WordPress. Here's a breakdown of
what the function does: */

if (!function_exists('neogym_add_custom_class_to_main_menu')) {
    function neogym_add_custom_class_to_main_menu($classes, $item, $args)
    {
        if ($args->theme_location === 'main_menu') {
            $classes[] = 'nav-item';

            if (in_array('current-menu-item', $item->classes) || in_array('current-page-ancestor', $item->classes)) {
                if (!is_front_page() && $item->url === home_url('/')) {
                    return $classes;
                }

                $classes[] = 'active';
            }

        }

        return $classes;
    }
}

add_filter('nav_menu_css_class', 'neogym_add_custom_class_to_main_menu', 10, 3);


/* This code snippet defines a function `neogym_add_custom_class_to_main_menu_links` that is used as a
filter callback to add a custom class to the attributes of main menu links in WordPress. */

if (!function_exists('neogym_add_custom_class_to_main_menu_links')) {
    function neogym_add_custom_class_to_main_menu_links($attrs, $item, $args)
    {
        if ($args->theme_location === 'main_menu') {
            $attrs['class'] = 'nav-link';

        }

        return $attrs;
    }
}
add_filter('nav_menu_link_attributes', 'neogym_add_custom_class_to_main_menu_links', 10, 3);
