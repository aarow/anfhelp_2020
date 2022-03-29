<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<!-- <div class="page-banner py-5 d-flex align-items-center justify-content-center" style="background-image:url(<?php the_field( "banner_image" ) ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-white">
                <?php the_field("banner_text" ) ?>
            </div>
        </div>
    </div>
</div> -->

<?php the_content(); ?>






<?php get_footer(); ?>
