<?php /* Template Name: Information Page Template */ ?>

<?php get_header(); ?>

<div class="container my-8 reading-font">
    <div class="row">
        <div class="col-sm-9 col-md-8 col-lg-7 col-xl-7 mx-auto">
            <h1 class="text-center"><?php the_title() ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer();
