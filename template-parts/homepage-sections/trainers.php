<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/trainer-bg.jpg');"
  class="trainer_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Our Gym Trainers
      </h2>
    </div>
    <div class="row">
      <?php
      $trainer_args = [
        'post_type' => 'trainers',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      ];

      $trainer = new $wp_query($trainer_args);
      if ($trainer->have_posts()):
        while ($trainer->have_posts()):
          $trainer->the_post();
          ?>
          <div class="col-lg-4 col-md-6 mx-auto">
            <div class="box">
              <div class="name">
                <h5>
                  <?php the_title(); ?>
                </h5>
              </div>
              <div class="img-box">
                <?php the_post_thumbnail('cover'); ?>
              </div>
              <div class="social_box">
                <a href="">
                  <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/facebook-logo.png" alt="">
                </a>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/twitter.png" alt="">
                </a>
                <a href="">
                  <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/instagram-logo.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>