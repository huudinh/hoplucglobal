<?php get_header(); ?>

<?php
    $category = get_queried_object();
    $category_id = $category->term_id;

    $typecate = get_field('cate_type', 'category_'.$category_id);

    if ($typecate == 'default'):
        echo '<div class="main_dls_1_0_0__item main_dls_1_0_0__item--col main_dls_1_0_0__item--post"></div>';
        get_template_part('Module/Category/prodcate_dls_1_0_0/prodcate_dls_1_0_0');
    endif;

    if (($typecate == 'brand') || ($typecate == '') || ($typecate == 'new_2')):
        get_template_part('Module/Category/brandcate_dls_1_0_0/brandcate_dls_1_0_0');
    endif;

    if ($typecate == 'news'):
        get_template_part('Module/Category/newsList_dls_1_0_0/newsList_dls_1_0_0');
        get_template_part('Module/Category/pagination_dls_1_0_0/pagination_dls_1_0_0');
    endif;

    if ($typecate == 'project'):
        get_template_part('Module/Category/projectList_dls_1_0_0/projectList_dls_1_0_0');
        get_template_part('Module/Category/pagination_dls_1_0_0/pagination_dls_1_0_0');
    endif;
?>

<?php get_footer(); ?>

