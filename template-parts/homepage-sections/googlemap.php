<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading_container">
          <h2 class="text-white">Our location</h2>
        </div>
        <p class="text-center text-white">Add Google Map Using Shortcode</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php
        if (shortcode_exists('google_map')):
          echo do_shortcode('[google_map place = "তিলকপুর" /]');
        endif;
        ?>

      </div>
    </div>
  </div>
</section>