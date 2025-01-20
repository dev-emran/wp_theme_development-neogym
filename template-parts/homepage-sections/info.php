<section class="info_section layout_padding2">
  <div class="container">
    <div class="info_items">
      <?php
        $contact_info = get_option('_neogym_theme_options')
      ?>
      <a href="">
        <div class="item ">
          <div
            style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/location-white.png);"
            class="img-box box-1">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              <?php
                 echo $contact_info['addresses'] ? esc_html( $contact_info['addresses'] ) : esc_html('Dont set');
               ?>
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div
            style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/telephone-white.png);"
            class="img-box box-2">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              <?php echo $contact_info['phone_no'] ? esc_html( $contact_info['phone_no'] ) : esc_html('Dont set'); ?>
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div
            style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/envelope-white.png);"
            class="img-box box-3">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              <?php echo $contact_info['email'] ? esc_html( $contact_info['email'] ) : esc_html('Dont set'); ?>
            </p>
          </div>
        </div>
      </a>
    </div>
    <div>
      <div class="row">
      <?php 
            $neogym_social_links = get_option('_neogym_theme_options');

          foreach ($neogym_social_links['social_links'] as $social):
          
          
         ?>
        <div class="col-md-4>
            <a href="<?php echo esc_url($social['social_url'])?>"><?php echo esc_html( $social['social_name'] ) ?></a>
        </div>
      <?php
        print_r($social);
      endforeach; 
      ?>
      </div>
      <div>
        <?php 
        
        $group = get_option('_neogym_theme_options');
        print_r($group['person_info']);
        
        ?>
      </div>
      <div>
        <?php 

          $image = get_option('_neogym_theme_options');
//           echo $image['image_upload'];
//           echo $image['gallery_image'];
//           foreach (explode(',', $image['gallery_image']) as $g_id) {
//             echo wp_get_attachment_image_src( $g_id, 'full')."<br/>";
//           }

          print_r($image['media_img']['url']);
          ?>
        <img src="<?php //echo $image['image_upload']; ?>" />
      </div>
        
    </div>
  </div>
</section>