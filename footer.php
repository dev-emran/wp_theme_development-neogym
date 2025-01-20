
  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <?php echo date('Y'); ?> <?php $contact_info = get_option('_neogym_theme_options');
echo $contact_info['copy_right'] ? esc_html($contact_info['copy_right']) : esc_html('Please set copyright text from theme admin options');?>
      <a href="<?php echo $contact_info['dev_url'] ? esc_url($contact_info['dev_url']) : esc_url('#'); ?>" target="_blank"><?php echo $contact_info['dev_name'] ? esc_html($contact_info['dev_name']) : esc_html('John Doe'); ?></a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="<?php echo get_template_directory_uri() . '/assets/' ?>js/bootstrap.js"></script>
  <?wp_footer();?>
</body>

</html>