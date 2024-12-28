<?php get_header()?>
<?php wp_head()?>
<?php

?>
<!-- slider section -->


<?php get_template_part('template-parts/homepage-sections/slider') ?>
<!-- end slider section -->


<!-- Shortcode section -->
<?php get_template_part('template-parts/homepage-sections/shortcode') ?>
<!-- end shortcode section -->


<!-- Us section -->
  <?php get_template_part('./template-parts/homepage-sections/whyus') ?>
<!-- end us section -->


<!-- students section -->
  <?php get_template_part('./template-parts/homepage-sections/students') ?>
 <!-- End students section -->

<!-- heathy section -->
 <?php get_template_part('./template-parts/homepage-sections/healthy') ?>
<!-- end heathy section -->

<!-- trainer section -->
  <?php get_template_part('./template-parts/homepage-sections/trainers') ?>
<!-- end trainer section -->


<!--Blog section Start -->
<?php get_template_part('./template-parts/homepage-sections/blog') ?>
<!--Blog section End -->


<!-- contact section -->
  <?php get_template_part('./template-parts/homepage-sections/contact') ?>
<!-- end contact section -->

<!-- info section -->
  <?php get_template_part('./template-parts/homepage-sections/info') ?>
<!-- end info_section -->

 <!-- Google map shortcode -->
  <?php get_template_part('./template-parts/homepage-sections/googlemap') ?>
<!-- end Google map shortcode -->



<?php wp_footer()?>
<?php get_footer()?>