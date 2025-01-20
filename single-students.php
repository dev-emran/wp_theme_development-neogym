<?php
	wp_head();
	get_header();
?>


<div class="container py-5">
    <div class="row">
        <!-- Left Column - Profile Info -->
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <div class="profile-img mx-auto mb-4">
                        <?php the_post_thumbnail( 'thumbnail', ['class' => 'rounded-circle'])?>
                    </div>
                    <h5 class="mb-0"><?php the_title(); ?></h5>
                    <p class="text-muted">Student ID: 2023456</p>
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <span class="badge bg-primary">Grade 11</span>
                        <span class="badge bg-success">Honor Roll</span>
                    </div>
                    <div class="border-top pt-3">
                        <div class="row text-center">
                        	<?php 
                        		$gpa = get_post_meta(get_the_ID(), 'student_gpa', true);
                        		if($gpa):
                        	?>
                            <div class="col">
                                <h6>GPA</h6>
                                <strong><?php echo esc_html($gpa); ?></strong>
                            </div>
                            <?php
                            	endif;
                            ?>
                            <div class="col">
                                <h6>Rank</h6>
                                <strong>15/200</strong>
                            </div>
                            <div class="col">
                                <h6>Credits</h6>
                                <strong>85</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mt-4">
                <div class="card-body">
                    <h6 class="card-title">Contact Information</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <small class="text-muted">Email</small><br>
                            sarah.j@school.edu
                        </li>
                        <li class="mb-2">
                            <small class="text-muted">Phone</small><br>
                            (555) 123-4567
                        </li>
                        <li>
                            <small class="text-muted">Address</small><br>
                            123 Education Lane<br>
                            Learning City, ST 12345
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Column - Academic Info -->
        <div class="col-lg-8">
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card shadow stat-card bg-primary text-white">
                        <div class="card-body">
                            <h6>Attendance Rate</h6>
                            <h3>98%</h3>
                            <div class="progress bg-light">
                                <div class="progress-bar bg-white" style="width: 98%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow stat-card bg-success text-white">
                        <div class="card-body">
                            <h6>Assignments Complete</h6>
                            <h3>95%</h3>
                            <div class="progress bg-light">
                                <div class="progress-bar bg-white" style="width: 95%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow stat-card bg-info text-white">
                        <div class="card-body">
                            <h6>Extra Curricular</h6>
                            <h3>4</h3>
                            <small>Activities</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Current Courses</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Grade</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php
                            		$subjects = get_post_meta(get_the_ID(), 'neogym_std_subjects', true);
                            		if($subjects):
                            		foreach($subjects as $subject):
                            	?>
                                <tr>
                                    <td><?php echo esc_html($subject['neogym_std_subject']); ?></td>
                                    <td><?php echo esc_html($subject['neogym_subject_teacher']); ?></td>
                                    <td><?php echo esc_html($subject['neogym_subject_grade']); ?></td>
                                    
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 
                                            <?php 
                                            	if($subject['neogym_subject_grade'] === 'A+'){
                                            		echo esc_html( "100%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'A'){
													echo esc_html( "70%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'A-'){
													echo esc_html( "60%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'B'){
													echo esc_html( "50%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'C'){
													echo esc_html( "40%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'D'){
													echo esc_html( "33%" );
                                            	}elseif($subject['neogym_subject_grade'] === 'F'){
													echo esc_html( "0%" );
                                            	}
                                        	?> 
                                        	">
                                    	</div>
                                        </div>
                                    </td>
                                </tr>
                            <?php 
                        		endforeach;
                        		endif; 

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Recent Activities</h5>
                    <button class="btn btn-sm btn-primary">View All</button>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="mb-3">
                            <small class="text-muted">Today</small>
                            <div class="d-flex gap-3 mt-2">
                                <div class="bg-success rounded-circle p-2 text-white" style="height: fit-content;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <h6 class="mb-1">Submitted Physics Lab Report</h6>
                                    <p class="text-muted mb-0">Grade: A</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <small class="text-muted">Yesterday</small>
                            <div class="d-flex gap-3 mt-2">
                                <div class="bg-primary rounded-circle p-2 text-white" style="height: fit-content;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <h6 class="mb-1">Math Quiz Completed</h6>
                                    <p class="text-muted mb-0">Score: 95%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	wp_footer();
	get_footer();
?>
