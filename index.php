<?php get_header() ?>
<?php wp_head() ?>

<!-- slider section -->
<section class=" slider_section position-relative">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="container">
          <div class="col-lg-10 col-md-11 mx-auto">
            <div class="detail-box">
              <div>
                <h3>
                  Fitness
                </h3>
                <h2>
                  Training
                </h2>
                <h1>
                  Neogym
                </h1>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                </p>
                <div class="">
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
  </div>
</section>
<!-- end slider section -->
</div>


<!-- Shortcode section -->

<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/us-bg.jpg);"
  class="shortcode_section contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2 class="text-center">
        Shortcode Section
      </h2>
    </div>

    <div class="us_container ">
      <div class="row">
        <div class="col-md-6 form_container">
          <?php
          if(shortcode_exists('neogym_my_first_shortcode')):
            echo do_shortcode('[neogym_my_first_shortcode]');
          endif;
          ?>
          <br>
          <?php
          if(shortcode_exists('button')):
            echo do_shortcode('[button title="Google" url="https://google.com" type="success"/]');
          endif;
          ?>
          <br>
          <?php
          if(shortcode_exists('button2')):
            echo do_shortcode('[button2 url="https://wordpress.org" type="warning"]WordPress[/button2]');
          endif;
          ?>
        </div>
        <div class="col-md-6">
          <?php 
          if(shortcode_exists('neogym_contact_form')):
            echo do_shortcode('[neogym_contact_form]');
          endif;
          ?>
        </div>
      </div>
    </div>
</section>

<!-- end shortcode section -->
<!-- Us section -->

<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/us-bg.jpg);"
  class="us_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Why Choose Us
      </h2>
    </div>

    <div class="us_container ">
      <div class="row">
        <?php
        $why_us_query_args = [
          'post_type' => 'why_us',
          'posts_per_page' => 4,
          'orderby' => 'date',
          'order' => 'DESC',
        ];

        $why_us = new WP_Query($why_us_query_args);
        if ($why_us->have_posts()):
          while ($why_us->have_posts()):
            $why_us->the_post();
        ?>
            <div class="col-lg-3 col-md-6">
              <div class="box">
                <div class="img-box">
                  <?php
                  if (has_post_thumbnail()):
                    the_post_thumbnail();
                  endif;
                  ?>
                </div>
                <div class="detail-box">
                  <h5>
                    <?php the_title(); ?>
                  </h5>
                  <p class="why_us_content">
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </div>
        <?php

          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>

<!-- end us section -->


<!-- students section -->

<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/healthy-bg.jpg);"
  class="heathy_section layout_padding">
  <div class="container">

    <div class="row">
      <div class="col-md-12 mx-auto">
        <div class="detail-box">
          <h2>
            HEALTHY MIND, HEALTHY BODY
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor
            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
          </p>
          <div class="btn-box">
            <a href="">
              READ MORE
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/healthy-bg.jpg);"
  class="students_section layout_padding">
  <div class="container">
    <div class="heading_container mb-5">
      <h2>
        Our Students
      </h2>
    </div>
    <!-- Student Cards -->
    <div class="row">
      <?php
      $student_query = [
        'post_type' => 'students',
      ];

      $students = new WP_Query($student_query);
      if ($students->have_posts()):
        while ($students->have_posts()):
          $students->the_post();
      ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body text-center">
                <div class="student-avatar mb-3">
                  <?php
                  if (has_post_thumbnail()):
                    the_post_thumbnail('cover', ['class' => 'student_image']);
                  endif;
                  ?>
                </div>
                <h5 class="card-title text-dark"><?php the_title(); ?></h5>
                <p class="card-text text-muted">
                  <?php
                  $departments = get_the_terms(get_the_ID(), 'department');
                  if ($departments && !is_wp_error($departments)) {
                    foreach ($departments as $dept) {
                      echo esc_html($dept->name);
                    }
                  }
                  ?>
                </p>
                <div class="mb-3">
                  <span class="badge bg-primary">Year 3</span>
                  <span class="badge bg-success">GPA: 3.8</span>
                </div>
                <div class="d-flex justify-content-center">
                  <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm mx-1"><i class="fas fa-eye"></i> View</a>
                </div>
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

<!-- end heathy section -->

<!-- trainer section -->

<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/trainer-bg.jpg);"
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

<!-- end trainer section -->


<!--Blog section Start -->
<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/healthy-bg.jpg);"
  class="blog_section layout_padding">
  <div class="container">
    <div class="heading_container mb-5">
      <h2 class="text-white">Latest Blog Posts</h2>
    </div>
    <div class="row">
      <?php
      $index = 1;
      if (have_posts()):
        while (have_posts()):
          the_post();
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
</section>
<!--Blog section End -->


<!-- contact section -->

<section class="contact_section ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/contact-img.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
          <?php echo do_shortcode('[neogym_contact_form]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end contact section -->

<!-- info section -->
<section class="info_section layout_padding2">
  <div class="container">
    <div class="info_items">
      <a href="">
        <div class="item ">
          <div
            style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/location-white.png);"
            class="img-box box-1">
            <img src="" alt="">
          </div>
          <div class="detail-box">
            <p>
              Location
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
              +02 1234567890
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
              demo@gmail.com
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- end info_section -->
<?php wp_footer() ?>
<?php get_footer() ?>