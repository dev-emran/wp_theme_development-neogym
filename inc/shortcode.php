<?php
    
    if(!function_exists('neogym_my_info_shortcode')){
        function neogym_my_info_shortcode(){
          $info = __('My name is Emran', 'neogym');
          return $info;
        }
    }
    if(!shortcode_exists('my_info')){
        add_shortcode('my_info', 'neogym_my_info_shortcode');
    }


    if(!function_exists('neogym_the_content')){
        function neogym_the_content( $attr=[], $content=null, $tag=''){

            // array_change_key_case((array) $attr, CASE_LOWER );

            $default_attr = [
                'class'     => 'default_class'
            ];

            $attr = shortcode_atts( $default_attr, $attr);
            $class = strtolower(sanitize_html_class( $attr['class']));

            if(empty($content)){
                $content = 'default content';
            }
            $content = sanitize_text_field(do_shortcode($content));
            $content = wp_kses_post( $content );

            return sprintf("<div class='%s'>%s</div>",
                
                $class,
                $content,
            );
        }
    }
    add_shortcode('content', 'neogym_the_content');

    // remove_shortcode('my_info');
    