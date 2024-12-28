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

 
    //Default posts listin shortcode


    if(!shortcode_exists('posts')){

        function neogym_post_listing(){

            ob_start();
            $posts = new WP_Query([

                'post_type'     => 'post',
            ]);
            ?>
            <!--Blog section Start -->
  <div class="container">
    <div class="heading_container mb-5">
      <h2 class="text-white">Latest Blog Posts</h2>
    </div>
    <div class="row">
      <?php
      $index = 1;
      if ($posts->have_posts()):
        while ($posts->have_posts()):
          $posts->the_post();
      ?>
          <!-- Card <?php echo $index ?> -->
          <div class="col-md-3">
            <div class="card post-card">
              <div class="position-relative">
                <?php
                if (has_post_thumbnail()):
                  the_post_thumbnail('cover', ['class' => 'card-img-top']);
                endif;
                ?>
                <span class="badge bg-success category-badge">
                  <?php
                  // echo get_the_category_list(',');
                  $categories = get_the_category();
                  if ($categories) {
                    echo esc_html(implode(', ', wp_list_pluck($categories, 'name')));
                  }
                  ?>
                </span>
              </div>

              <div class="card-body">
                <a href="<?php the_permalink() ?>">
                  <h2 class="card-title h5"><?php the_title(); ?></h2>
                </a>

                <p class="card-text text-muted small">
                  <?php echo get_custom_excerpt(10); ?>
                </p>

                <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="d-flex align-items-center">
                    <div class="author-img me-2">
                      <?php
                      echo get_avatar(get_the_author_meta('ID'), 25, null, null, ['class' => 'rounded-circle']);
                      ?>
                    </div>
                    <div>
                      <p class="mb-0 small fw-bold">By: <?php the_author(); ?></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-footer bg-white border-top-0">
                <div class="d-flex justify-content-between align-items-center small">
                  <span class="text-muted"><?php echo get_the_date(); ?></span>
                  <span class="text-muted">at <?php the_time() ?></span>
                </div>
              </div>
            </div>
          </div>
      <?php
          $index++;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
<!--Blog section End -->
            <?php
            return ob_get_clean();
        }
        add_shortcode('posts', 'neogym_post_listing');
    }
    
    
    