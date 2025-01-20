<?php
if (! function_exists('handle_contact_form_submission')) {
    function handle_contact_form_submission()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['contact_form_nonce_field'])) {

            if (! isset($_POST['contact_form_nonce_field']) || ! wp_verify_nonce($_POST['contact_form_nonce_field'], 'contact_form_nonce')) {
                return;
            }

            $name     = sanitize_text_field($_POST['name']);
            $email    = sanitize_email($_POST['email']);
            $phone_no = sanitize_text_field($_POST['phone_no']);
            $message  = sanitize_textarea_field($_POST['message']);

            if (! is_email($email)) {
                echo 'Please provide a valid email address.';
                return;
            }

            global $wpdb;
            $table_name = $wpdb->prefix . 'contact_info';

            $wpdb->insert(
                $table_name,
                [
                    'name'     => $name,
                    'email'    => $email,
                    'phone_no' => $phone_no,
                    'message'  => $message,
                ],
                ['%s', '%s', '%s', '%s']
            );
            
            // echo 'Thank you for your message!';
        }
    }
}
add_action('wp_head', 'handle_contact_form_submission');
