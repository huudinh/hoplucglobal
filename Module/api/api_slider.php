<?php
    // $category = get_queried_object();
    // $category_id = $category->term_id;
    $categories = get_the_category();
	$category_id = $categories[0]->cat_ID;

    if((is_category()) || (is_single())){
        $page_field = get_field('group_page_field', 'category_'.$category_id);
    } else {
        $page_field = get_field('group_page_field');
    }
    $arrcheck = array();
    $css_inline = '';
    $js_inline = '';
    if (!empty($page_field)){
        foreach($page_field as $field_0){
            if (!empty($field_0)){
                foreach($field_0 as $field){
                    $name = $field['acf_fc_layout'];
                    if($name == 'slider_lhl_1_1_0'){
                        include(locate_template('template-parts/content-'.$name.'.php'));
                    }
                }
            }
        }
    }
?>
