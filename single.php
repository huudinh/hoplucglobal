<?php 
    get_header(); 
    
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    $typecate = get_field('cate_type', 'category_'.$category_id);
?>

<?php if (($typecate == 'default') || ($typecate == 'brand')): ?>
	<div class="main_dls_1_0_0__item main_dls_1_0_0__item--col main_dls_1_0_0__item--post"></div>
<?php endif; ?>

<?php if (($typecate == 'default') || ($typecate == 'brand')): ?>
    <div class="container">
        <div class="main_dls_1_0_0__post row">
            <div class="col-xl-2">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-xl-10">
                <?php get_template_part('Module/Post/product_dls_1_0_0/product_dls_1_0_0'); ?>
                <?php get_template_part('Module/Post/newsOther_dls_1_0_0/newsOther_dls_1_0_0'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($typecate == 'news'): ?>
    <?php get_template_part('Module/Post/newsDetail_dls_1_0_0/newsDetail_dls_1_0_0'); ?>
    <?php get_template_part('Module/Post/newsOther_dls_1_1_0/newsOther_dls_1_1_0'); ?>
<?php endif; ?>
    
<?php if ($typecate == 'project'): ?>
    <?php get_template_part('Module/Post/project_dls_1_1_0/project_dls_1_1_0'); ?>
    <?php get_template_part('Module/Post/projectOther_dls_1_0_0/projectOther_dls_1_0_0'); ?>
<?php endif; ?>

<?php get_footer(); ?>