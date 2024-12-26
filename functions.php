<?php

if (!function_exists('neogym_bootstrapping')) {
    function neogym_bootstrapping()
    {
        load_theme_textdomain('neogym');
        add_theme_support('post-thumbnails', ['post', 'trainers', 'why_us', 'students']);
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

// Register Custom Post Type
function neogym_custom_post_type()
{

    $labels = [
        'name' => _x('Trainers', 'Post Type General Name', 'neogym'),
        'singular_name' => _x('Trainer', 'Post Type Singular Name', 'neogym'),
        'menu_name' => __('Trainers', 'neogym'),
        'name_admin_bar' => __('Trainers', 'neogym'),
        'archives' => __('Item Archives', 'neogym'),
        'attributes' => __('Item Attributes', 'neogym'),
        'parent_item_colon' => __('Parent Item:', 'neogym'),
        'all_items' => __('All Trainers', 'neogym'),
        'add_new_item' => __('Add New Trainer', 'neogym'),
        'add_new' => __('Add New', 'neogym'),
        'new_item' => __('New Item', 'neogym'),
        'edit_item' => __('Edit Item', 'neogym'),
        'update_item' => __('Update Item', 'neogym'),
        'view_item' => __('View Item', 'neogym'),
        'view_items' => __('View Items', 'neogym'),
        'search_items' => __('Search Item', 'neogym'),
        'not_found' => __('Not found', 'neogym'),
        'not_found_in_trash' => __('Not found in Trash', 'neogym'),
        'featured_image' => __('Featured Image', 'neogym'),
        'set_featured_image' => __('Set featured image', 'neogym'),
        'remove_featured_image' => __('Remove featured image', 'neogym'),
        'use_featured_image' => __('Use as featured image', 'neogym'),
        'insert_into_item' => __('Insert into item', 'neogym'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'neogym'),
        'items_list' => __('Items list', 'neogym'),
        'items_list_navigation' => __('Items list navigation', 'neogym'),
        'filter_items_list' => __('Filter items list', 'neogym'),
    ];
    $args = [
        'label' => __('Trainer', 'neogym'),
        'description' => __('Post Type Description', 'neogym'),
        'menu_icon' => 'dashicons-admin-customizer',
        'labels' => $labels,
        'supports' => ['title', 'editor', 'thumbnail'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'has_archive' => true,
    ];
    register_post_type('trainers', $args);
}
add_action('init', 'neogym_custom_post_type', 0);

if (!function_exists('neogym_why_us_cpt')) {
    function neogym_why_us_cpt()
    {
        register_post_type('why_us', [
            'labels' => [
                'name' => __('Why Us', 'neogym'),
                'singular_name' => _x('why_us', 'neogym'),
                'add_new_item' => __('Add New', 'neogym'),
                'add_new' => __('Add New', 'neogym'),
                'all_items' => __('All Why_Us', 'neogym'),
            ],
            'label' => __('Why_us', 'neogym'),
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => 'dashicons-admin-network',
        ]);
    }
}

add_action('init', 'neogym_why_us_cpt', 0);

/* This code snippet is defining a custom post type called 'Students' in WordPress. Here's a breakdown
of what the code does: */

if (!function_exists('neogym_students_custom_post_type')) {
    function neogym_students_custom_post_type()
    {
        $labeles = [
            'name' => __('Students', 'neogym'),
            'singular_name' => __('Student', 'neogym'),
            'menu_name' => __('Students', 'neogym'),
            'name_admin_bar' => __('Students', 'neogym'),
            'add_new' => __('Add new', 'neogym'),
            'add_new_item' => __('Add New Student', 'neogym'),
            'not_found' => __('No students found', 'neogym'),
            'featured_image' => __('Student image', 'neogym'),
            'set_featured_image' => __('Set student image', 'neogym'),
            'remove_featured_image' => __('Remove Student Image', 'neogym'),
            'edit_item' => __('Edit Student', 'neogym'),
            'not_found_in_trash' => __('No student found in trash'),
            'search_items' => __('Search student', 'neogym'),
            'items_list' => __('Student list', 'neogym'),
            'filter_items_list' => __('Filter items list', 'neogym'),
            'view_items' => __('View Student', 'neogym'),
            'item_published' => __('Student published', 'neogym'),
            'item_updated' => __('Student updated', 'neogym'),
            'item_reverted_to_draft' => __('Student reverted to draft'),

        ];
        $args = [
            'labels' => $labeles,
            'public' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => ['title', 'editor', 'thumbnail'],
            'show_in_menu' => true,
            'has_archive' => true,
        ];
        register_post_type('students', $args);
    }
}
add_action('init', 'neogym_students_custom_post_type');

//custom post type title placeholder change
/* This code snippet is defining a function `neogym_custom_student_title_placeholder` that is used as a
filter callback to customize the placeholder text for the title field in the WordPress admin area
when adding a new post of the custom post type 'students'. */

if (!function_exists('neogym_custom_student_title_placeholder')) {
    function neogym_custom_student_title_placeholder($title)
    {
        $screen = get_current_screen();
        if ($screen->post_type === 'students') {
            $title = 'Enter Student Name';
        }
        return $title;
    }
}
add_filter('enter_title_here', 'neogym_custom_student_title_placeholder');

//custom taxonomy
/* This code snippet is defining a custom taxonomy called 'Department' for the custom post type
'students' in WordPress. Here's a breakdown of what the code does: */

if (!function_exists('neogym_custom_taxonomy_department')) {
    function neogym_custom_taxonomy_department()
    {
        $labels = [
            'name' => _x('Depertment', 'taxonomy general name'),
            'singular_name' => _x('Department', 'taxonomy singular name'),
            'search_items' => __('Search Depertment'),
            'all_items' => __('All Depertment'),
            'parent_item' => __('Parent Department'),
            'parent_item_colon' => __('Parent Department:'),
            'edit_item' => __('Edit Department'),
            'update_item' => __('Update Department'),
            'add_new_item' => __('Add New Department'),
            'new_item_name' => __('New Department Name'),
            'menu_name' => __('Depertment'),
        ];
        $args = [
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'depertment'],
        ];

        register_taxonomy('department', ['students'], $args);
    }
}
add_action('init', 'neogym_custom_taxonomy_department');

//shortcode
if (!function_exists('neogym_custom_all_shortcodes')) {
    function neogym_custom_all_shortcodes()
    {
        //shortcode for my first shortcode 1

        if (!shortcode_exists('neogym_my_first_shortcode')) {
            function my_shortcode_function()
            {
                $content = "This is my first shortcode";
                return $content;
            }

            add_shortcode('neogym_my_first_shortcode', 'my_shortcode_function');
        }

        //shortcode for my contact form
        if (!shortcode_exists('neogym_contact_form')) {
            function neogym_contact_form_shortcode_function()
            {
                ob_start();
                ?>
                <form action="">
                    <div>
                        <input type="text" placeholder="Name" />
                    </div>
                    <div>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" placeholder="Phone Number" />
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" />
                    </div>
                    <div class="d-flex " >
                        <button>
                            Send
                        </button>
                    </div>
                </form>
                <?php
return ob_get_clean();
            }

            add_shortcode('neogym_contact_form', 'neogym_contact_form_shortcode_function');
        }

        //shortcode for my button

        if (!shortcode_exists('neogym_button')) {
            function neogym_button($attributes)
            {
                $defult_attributes = [
                    'url' => '#',
                    'type' => 'primary',
                    'text' => 'Button',
                ];
                $url = strtolower(esc_url($attributes['url']));
                $type = strtolower(sanitize_html_class($attributes['type']));
                $text = __(sanitize_text_field($attributes['text']), 'neogym');
                $attributes = shortcode_atts($defult_attributes, $attributes);
                return sprintf('<a href="%s" target="_blank" class="btn btn-%s full-width">%s</a>',
                    $url,
                    $type,
                    $text
                );
            };

            add_shortcode('button', 'neogym_button');
        }

        //shortcode for my button2

        if (!shortcode_exists('neogym_button2')) {
            function neogym_button2($attributes, $content = '')
            {
                $defult_attributes = [
                    'url' => '#',
                    'type' => 'primary',
                ];
                $attributes = shortcode_atts($defult_attributes, $attributes);
                $url = strtolower(esc_url($attributes['url']));
                $type = strtolower(sanitize_html_class($attributes['type']));
                if (empty($content)) {
                    $content = 'Button';
                }
                $content = do_shortcode($content);
                return sprintf('<a href="%s" target="_blank" class="btn btn-%s full-width">%s</a>',
                    $url,
                    $type,
                    $content
                );
            };

            add_shortcode('button2', 'neogym_button2');
        }

        //shortcode for google map
        if (!shortcode_exists('google_map')) {
            function neogym_google_map_shortcode($attributes)
            {
                $defult_attributes = [
                    'place' => 'Dhaka',
                    'width' => '100%',
                    'height' => '700px',
                    'zoom' => 12,
                ];
                $attributes = shortcode_atts($defult_attributes, $attributes);

                $place = sanitize_text_field($attributes['place']);
                $width = sanitize_text_field($attributes['width']);
                $height = sanitize_text_field($attributes['height']);
                $zoom = sanitize_text_field($attributes['zoom']);
                $map = <<<EOD
                    <div>
                        <iframe width="{$width}" height="{$height}"
                            src="https://maps.google.com/maps?q={$place}&t=&z={$zoom}&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="0" marginheight="0" marginwidth="0"
                            title="Google Map showing {$place}">
                        </iframe>
                    </div>
                EOD;
                return $map;
            }
            add_shortcode('google_map', 'neogym_google_map_shortcode');
        }
    }
}
add_action('init', 'neogym_custom_all_shortcodes');
