<?php
get_header();
?>

<div>
   <h2 class="text-center">
   <?php
        the_title();
    ?>
   </h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            the_content();
            ?>
        </div>
    </div>

</div>

<?php
get_footer();
?>