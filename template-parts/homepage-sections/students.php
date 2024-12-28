<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/healthy-bg.jpg');"
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
                                    <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm mx-1"><i
                                            class="fas fa-eye"></i> View</a>
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