<?php 
    get_header();

?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(has_post_thumbnail()):
                        the_post_thumbnail('cover');
                    endif;
                ?>
                <h2 class="text-center mt-3"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php 
    get_footer();

?>


