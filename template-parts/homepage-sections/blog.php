<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/healthy-bg.jpg');"
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