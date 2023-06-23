<?php get_header(); ?>

<?php
    $category = get_queried_object();
    $category_id = $category->term_id;
    $typecate = get_field('cate_type', 'category_'.$category_id);    
?>
<?php include(locate_template('Module/api/api_slider.php')); ?>

<main class="container">
    <div class="row">
        <div class="col-lg-9">
            <?php 
                if (($typecate == 'default') || ($typecate == '')):
                    get_template_part('Module/Category/newsCate_lhl_1_0_0/newsCate_lhl_1_0_0');
                endif;

                if ($typecate == 'client'):
                    get_template_part('Module/Category/clientsCate_lhl_1_0_0/clientsCate_lhl_1_0_0');
                endif;

                get_template_part('Module/Category/pagination_lhl_1_0_0/pagination_lhl_1_0_0');
            ?>
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

