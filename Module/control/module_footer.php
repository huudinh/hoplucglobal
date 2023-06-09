<?php
    $page_field = get_field('group_page_field', 'option');
    // Đường dẫn đến theme
    $path = get_template_directory_uri();
    $arrcheck = array();
    if (!empty($page_field)){
        foreach($page_field as $field_0){
            if (!empty($field_0)){
                foreach($field_0 as $field){
                    $name = $field['acf_fc_layout'];
                    if ($name == 'footer_lhl_1_0_0'){
                        if(in_array($name,$arrcheck)){
                            $check = 1;
                        }else{
                            array_push($arrcheck,$name);
                            $check = 0;
                        }
                        include(locate_template('template-parts/content-'.$name.'.php'));
                    }
                }
            }
        }
    }
?>