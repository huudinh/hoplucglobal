<?php
    $module_id =  '99';
    $page_field = get_field('group_page_field',$module_id);
    // Đường dẫn đến theme
    $arrcheck = array();
    $css_inline = '';
    $js_inline = '';
    if (!empty($page_field)){
        foreach($page_field as $field_0){
            if (!empty($field_0)){
                foreach($field_0 as $field){
                    $name = $field['acf_fc_layout'];
                    if($name == 'photo_lhl_1_0_0'){}
                }
            }
        }
    }

?>
