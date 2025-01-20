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
                                    <?php 
                                        $duration = get_post_meta(get_the_ID(), 'duration', true);
                                        $gpa = get_post_meta(get_the_ID(), 'student_gpa', true);
                                        if($duration):
                                    ?>
                                    <span class="badge bg-primary">
                                        <?php printf("Duration: %s year", $duration);?>
                                    </span>
                                <?php endif; 
                                    if($gpa):
                                ?>
                                    <span class="badge bg-success">GPA: <?php echo $gpa ?></span>
                                    <?php
                                        endif;
                                        $gender = get_post_meta(get_the_ID(), 'neogym_gender', true);
                                        $class = get_post_meta(get_the_ID(), 'neogym_std_class', true);
                                        $subjects = get_post_meta(get_the_ID(), 'neogym_std_subjects', true);

                                    ?>
                                    <span class="badge bg-warning">Gender: <?php echo esc_html(ucwords($gender)); ?></span>
                                    <span class="badge bg-info">Class: <?php echo esc_html($class); ?></span>
                                    <span class="badge bg-info">Subjects: 
                                    <?php
                                        if($subjects):
                                            echo implode(', ', array_column($subjects, 'neogym_std_subject'));
                                    endif;
                                    ?>
                                    </span>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-info btn-sm mx-1"><i
                                            class="fas fa-eye"></i> View</a>
                                </div>
                            </div>
                            <?php
                                // print_r($subjects);
                            ?>
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