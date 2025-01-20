<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="card mx-auto">
            <div class="card-header">
                <h2 class="tex-center">Add Student Form</h2>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <form id="student-form" method="post">
                        <div class="mb-4">
                            <label for="student_name">Student Name:</label>
                            <input class="form-control" type="text" id="student_name" name="student_name" required>
                        </div>

                        <div class="mb-4">
                            <label for="student_email">Email:</label>
                            <input class="form-control" type="email" id="student_email" name="student_email" required>
                        </div>

                        <div class="mb-4">
                            <label for="student_phone">Phone:</label>
                            <input class="form-control" type="tel" id="student_phone" name="student_phone" required>
                        </div>
                        <div class="mb-4">
                            <label for="student_address">Address:</label>
                            <textarea class="form-control" id="student_address" name="student_address"
                                required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="student_age">Age:</label>
                            <input class="form-control" type="number" id="student_age" name="student_age" required>
                        </div>
                        <div class="mb-4">
                            <input type="hidden" name="student_nonce"
                                value="<?php echo wp_create_nonce('student_form_nonce'); ?>">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
get_footer();
?>