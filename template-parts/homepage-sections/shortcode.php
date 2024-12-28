<section style="background-image: url('<?php echo get_template_directory_uri() . '/assets/' ?>images/us-bg.jpg');"
    class="shortcode_section contact_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2 class="text-center">
                Shortcode Section
            </h2>
        </div>

        <div class="us_container ">
            <div class="row">
                <div class="col-md-6 form_container">
                    <?php
                    if (shortcode_exists('neogym_my_first_shortcode')):
                        echo do_shortcode('[neogym_my_first_shortcode]');
                    endif;
                    ?>
                    <br>
                    <?php
                    if (shortcode_exists('button')):
                        echo do_shortcode('[button text="Google" url="https://google.com" type="success"/]');
                    endif;
                    ?>
                    <br>
                    <?php
                    if (shortcode_exists('button2')):
                        echo do_shortcode('[button2 url="https://wordpress.org" type="warning"]WordPress[/button2]');
                    endif;
                    ?>
                    <?php
                    if (shortcode_exists('content')) {
                        echo do_shortcode('[content CLASS="customclass" ]My content shortcode[/content]');
                    }
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    if (shortcode_exists('neogym_contact_form')):
                        echo do_shortcode('[neogym_contact_form]');
                    endif;
                    ?>

                </div>
            </div>
        </div>
</section>