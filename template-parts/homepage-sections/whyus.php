<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/us-bg.jpg');"
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