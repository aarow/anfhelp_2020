<?php /* Template Name: Information Page Template */ ?>

<?php get_header(); ?>

<div class="container my-8 reading-font">
    <div class="row">
        <div class="col-12 mx-auto">
            <h1 class="text-center"><?php the_title() ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer();
