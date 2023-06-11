<?php get_header(); ?>
<?php include(locate_template('Module/api/api_slider.php')); ?>

<main class="container">
    <div class="row">
        <div class="col-lg-9">
            <?php get_template_part('Module/Post/newsDetail_lhl_1_0_0/newsDetail_lhl_1_0_0'); ?>
            <?php get_template_part('Module/Post/tags_lhl_1_0_0/tags_lhl_1_0_0'); ?>
            <?php get_template_part('Module/Post/newsOther_lhl_1_0_0/newsOther_lhl_1_0_0'); ?>
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>