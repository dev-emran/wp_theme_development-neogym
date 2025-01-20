<?php

add_action('save_post_students', function ($post_id, $post, $update) {
    // Check if this is a valid post save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Ensure this is not a bulk/quick edit or a revision
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) {
        return;
    }

    // Check post type
    if ($post->post_type !== 'students') {
        return;
    }

    // Check if this is an update (student_id already exists)
    $existing_student_id = get_post_meta($post_id, 'student_id', true);
    if (!$update || empty($existing_student_id)) {
        // Generate a unique 8-digit random number
        do {
            $random_number = sprintf('%08d', mt_rand(10000000, 99999999));
            // Check uniqueness by searching for the same value in meta
            $is_unique = !metadata_exists('post', null, 'student_id', $random_number);
        } while (!$is_unique);

        // Save the generated student_id as a meta field
        update_post_meta($post_id, 'student_id', $random_number);
    }
}, 10, 3);


