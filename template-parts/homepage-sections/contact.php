<section class="contact_section ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 px-0">
        <div class="img-box">
          <img src="<?php echo get_template_directory_uri() . '/assets/' ?>images/contact-img.jpg" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="form_container pr-0 pr-lg-5 mr-0 mr-lg-2">
          <div class="heading_container">
            <h2>
              Contact Us
            </h2>
          </div>
          <?php //echo do_shortcode('[neogym_contact_form]'); ?>
          <form method="post" id="contact-form">
            <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce_field') ?>
            <div>
              <input type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div>
              <input type="email" name="email" id="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" name="phone_no" id="phone_name" placeholder="Phone Number" />
            </div>
            <div>
              <input type="text" name="message" id="message" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button type="submit">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>