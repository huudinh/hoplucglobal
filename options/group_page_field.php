<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e534d93e4dbc',
        'title' => 'Cấu hình Hệ Thống',
        'fields' => array(
            array(
                'key' => 'group_admin_control',
                'label' => '',
                'name' => 'group_admin_control',
                'type' => 'checkbox',            
                'choices' => array(
                    'show' => 'Hiển Thị Module',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'group_admin',
                'label' => '',
                'name' => 'group_admin',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'choices' => array(
                    'show_header_footer' => 'Header/Footer',
                    'show_module_main' => 'Module Main',
                    'show_module_site' => 'Setup Website',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5e534e2c90dac',
                'label' => '',
                'name' => 'group_page_field',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(      
                        'key' => 'group_page_field_header',
                        'label' => 'Cài đặt Header - Footer',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'header_custom',
                        'label' => '',
                        'name' => 'header_custom',
                        'type' => 'flexible_content',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'layouts' => array(                        
                            'id_header_lhl_1_0_0' => array(
                                'key' => 'id_header_lhl_1_0_0',
                                'name' => 'header_lhl_1_0_0',
                                'label' => 'Header 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_header_lhl_1_0_0_tab1',
                                        'label' => 'Thông Tin Chung',
                                        'type' => 'tab',
                                    ),
                                    array(
                                        'key' => 'id_header_lhl_1_0_0_tab1_sub1',
                                        'name' => 'info',
                                        'type' => 'textarea',
                                        'rows' => 3,
                                    ),
                                    array(
                                        'key' => 'id_header_lhl_1_0_0_tab2',
                                        'label' => 'Cài Đặt Menu',
                                        'type' => 'tab',
                                    ),
                                    array(
                                        'key' => 'id_header_lhl_1_0_0_sub1',
                                        'label' => 'Menu',
                                        'name' => 'id_header_lhl_1_0_0_sub1',
                                        'type' => 'flexible_content',
                                        'layouts' => array(
                                            'id_header_lhl_1_0_0_sub1_layout1' => array(
                                                'key' => 'id_header_lhl_1_0_0_sub1_layout1',
                                                'name' => 'menu_don',
                                                'label' => 'Menu Đơn',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_lhl_1_0_0_sub1_layout1_sub',
                                                        'label' => 'Tên Menu',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Tên Menu | Link ',
                                                        'rows' => 2,
                                                    ),
                                                ),
                                            ),
                                            'id_header_lhl_1_0_0_sub1_layout2' => array(
                                                'key' => 'id_header_lhl_1_0_0_sub1_layout2',
                                                'name' => 'menu_sub',
                                                'label' => 'Menu Sub',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_lhl_1_0_0_sub1_layout2_sub1',
                                                        'label' => 'Menu Cha',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => 'Tên Menu | Link ',
                                                        'rows' => 2,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_lhl_1_0_0_sub1_layout2_sub2',
                                                        'label' => 'Sub Menu',
                                                        'name' => 'col1',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                ),
                                            ),
                                            'id_header_lhl_1_0_0_sub1_layout3' => array(
                                                'key' => 'id_header_lhl_1_0_0_sub1_layout3',
                                                'name' => 'menu_sub_full',
                                                'label' => 'Mega Menu',
                                                'display' => 'row',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_lhl_1_0_0_sub1_layout3_sub1',
                                                        'label' => 'Menu cha',
                                                        'name' => 'title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên menu <br>
                                                            Dòng 2 : Link <br>
                                                            Dòng 3 : Số cột <br>
                                                        ',
                                                        'rows' => 3,
                                                    ),
                                                    array(
                                                        'key' => 'id_header_lhl_1_0_0_sub1_layout3_sub2',
                                                        'label' => 'Sub Menu',
                                                        'name' => 'col1',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                        'required' => 0,
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                ),
                                            ),
                                        ),
                                        'button_label' => 'Thêm Menu',
                                    ),
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            'id_footer_lhl_1_0_0' => array(
                                'key' => 'id_footer_lhl_1_0_0',
                                'name' => 'footer_lhl_1_0_0',
                                'label' => 'Footer 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_footer_lhl_1_0_0_sub',
                                        'label' => 'Thông Tin',
                                        'name' => 'info',
                                        'type' => 'textarea',
                                        'instructions' => '',
                                        'rows' => 2,
                                    ),
                                ),
                            ),                                                       
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_body',
                        'label' => 'Cài đặt Module Main',
                        'name' => '',
                        'type' => 'tab',
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                
                    array(
                        'key' => 'body_custom',
                        'label' => '',
                        'name' => 'body_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'layouts' => array(
                            'id_slider_lhl_1_0_0' => array(
                                'key' => 'id_slider_lhl_1_0_0',
                                'name' => 'slider_lhl_1_0_0',
                                'label' => 'Slider 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_slider_lhl_1_0_0_sub1',
                                        'label' => 'Nội dung',
                                        'name' => 'slider',
                                        'type' => 'repeater',
                                        'layout' => 'table',
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_slider_lhl_1_0_0_sub1_sub1',
                                                'label' => 'Tiêu đề',
                                                'name' => 'sliderItemText',
                                                'type' => 'text',
                                                'default_value' => 'Slider',
                                            ),
                                            array(
                                                'key' => 'id_slider_lhl_1_0_0_sub1_sub2',
                                                'label' => 'Link ảnh (size 1920 x 900)',
                                                'name' => 'sliderItemLink',
                                                'type' => 'text',
                                                'default_value' => '/wp-content/themes/SCI_Theme/Module/Home/slider_lhl_1_0_0/images/slider.jpg',
                                            ),
                                            array(
                                                'key' => 'id_slider_lhl_1_0_0_sub1_sub3',
                                                'label' => 'id Youtube',
                                                'name' => 'sliderItemId',
                                                'type' => 'text',
                                            ),
                                        ),
                                    ),
                                ),
                            ), 
                            'id_slider_lhl_1_1_0' => array(
                                'key' => 'id_slider_lhl_1_1_0',
                                'name' => 'slider_lhl_1_1_0',
                                'label' => 'Slider 1.1.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_slider_lhl_1_1_0_sub1',
                                        'label' => 'Link ảnh',
                                        'name' => 'data',
                                        'type' => 'textarea',
                                        'rows' => 1,
                                        'new_lines' => '',
                                    ),
                                ),
                            ),
                            'id_service_lhl_1_0_0' => array(
                                'key' => 'id_service_lhl_1_0_0',
                                'name' => 'service_lhl_1_0_0',
                                'label' => 'Service 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_service_lhl_1_0_0_sub1',
                                        'label' => 'Chọn Cate',
                                        'name' => 'service_content',
                                        'type' => 'taxonomy',
                                        'taxonomy' => 'category',
                                        'field_type' => 'select',
                                        'allow_null' => 0,
                                        'add_term' => 1,
                                        'save_terms' => 0,
                                        'load_terms' => 0,
                                        'return_format' => 'id',
                                        'multiple' => 0,
                                    ),
                                ),
                            ),
                            'id_number_lhl_1_0_0' => array(
                                'key' => 'id_number_lhl_1_0_0',
                                'name' => 'number_lhl_1_0_0',
                                'label' => 'Number 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_number_lhl_1_0_0_sub0',
                                        'label' => 'Tiêu đề',
                                        'name' => 'title',
                                        'type' => 'text',
                                    ),
                                    array(
                                        'key' => 'id_number_lhl_1_0_0_sub1',
                                        'label' => 'Nội dung',
                                        'name' => 'number',
                                        'type' => 'repeater',
                                        'layout' => 'table',
                                        'max' => 6,
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_number_lhl_1_0_0_sub1_sub1',
                                                'label' => 'Number',
                                                'name' => 'numberText',
                                                'type' => 'text',
                                            ),
                                            array(
                                                'key' => 'id_number_lhl_1_0_0_sub1_sub2',
                                                'label' => 'Content',
                                                'name' => 'numberContent',
                                                'type' => 'text',
                                            ),
                                        ),
                                    ),
                                ),
                            ), 
                            'id_clients_lhl_1_0_0' => array(
                                'key' => 'id_clients_lhl_1_0_0',
                                'name' => 'clients_lhl_1_0_0',
                                'label' => 'Clients 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_clients_lhl_1_0_0_sub1',
                                        'label' => 'Tiêu đề',
                                        'name' => 'client_title',
                                        'type' => 'text',
                                    ),
                                    array(
                                        'key' => 'id_clients_lhl_1_0_0_sub2',
                                        'label' => 'Chọn Cate',
                                        'name' => 'client_content',
                                        'type' => 'taxonomy',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'taxonomy' => 'category',
                                        'field_type' => 'select',
                                        'allow_null' => 0,
                                        'add_term' => 1,
                                        'save_terms' => 0,
                                        'load_terms' => 0,
                                        'return_format' => 'object',
                                        'multiple' => 0,
                                    ),
                                ),
                            ),
                            'id_news_lhl_1_0_0' => array(
                                'key' => 'id_news_lhl_1_0_0',
                                'name' => 'news_lhl_1_0_0',
                                'label' => 'News 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_news_lhl_1_0_0_sub1',
                                        'label' => 'Tiêu đề',
                                        'name' => 'news_title',
                                        'type' => 'text',
                                    ),
                                    array(
                                        'key' => 'id_news_lhl_1_0_0_sub2',
                                        'label' => 'Chọn Cate',
                                        'name' => 'news_content',
                                        'type' => 'taxonomy',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'taxonomy' => 'category',
                                        'field_type' => 'select',
                                        'allow_null' => 0,
                                        'add_term' => 1,
                                        'save_terms' => 0,
                                        'load_terms' => 0,
                                        'return_format' => 'object',
                                        'multiple' => 0,
                                    ),
                                ),
                            ),
                            'id_album_lhl_1_0_0' => array(
                                'key' => 'id_album_lhl_1_0_0',
                                'name' => 'album_lhl_1_0_0',
                                'label' => 'Album 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_album_lhl_1_0_0_sub0',
                                        'label' => 'Tiêu đề',
                                        'name' => 'title',
                                        'type' => 'textarea',
                                        'instructions' => '1. Tiêu đề trái | 2. Tiêu đề phải | 3. ID Youtube',
                                        'default_value' => 'Video | Gallery | btHEfSOgSZA',
                                        'rows' => 2,
                                        'new_lines' => '',
                                    ),
                                ),
                            ),
                            'id_photo_lhl_1_0_0' => array(
                                'key' => 'id_photo_lhl_1_0_0',
                                'name' => 'photo_lhl_1_0_0',
                                'label' => 'Photo 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_photo_lhl_1_0_0_sub1',
                                        'label' => 'Nội dung',
                                        'name' => 'photo',
                                        'type' => 'repeater',
                                        'layout' => 'block',
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_photo_lhl_1_0_0_sub1_sub1',
                                                'label' => 'Dịch vụ',
                                                'name' => 'photoService',
                                                'type' => 'text',  
                                                'instructions' => '1. Tiêu đề | 2. Link',                                              
                                            ),
                                            array(
                                                'key' => 'id_photo_lhl_1_0_0_sub1_sub2',
                                                'label' => 'Hình ảnh',
                                                'name' => 'photoAlbum',
                                                'type' => 'gallery',
                                                'instructions' => '',
                                                'required' => 0,
                                                'conditional_logic' => 0,
                                                'return_format' => 'array',
                                                'preview_size' => 'medium',
                                                'insert' => 'append',
                                                'library' => 'all',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'id_video_lhl_1_0_0' => array(
                                'key' => 'id_video_lhl_1_0_0',
                                'name' => 'video_lhl_1_0_0',
                                'label' => 'Video 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_video_lhl_1_0_0_sub1',
                                        'label' => 'Danh sách Video',
                                        'name' => 'video',
                                        'type' => 'flexible_content',
                                        'layouts' => array(
                                            'layout_content' => array(
                                                'key' => 'id_video_lhl_1_0_0_sub1_layout1',
                                                'name' => 'videoContent',
                                                'label' => 'Video Cate',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_video_lhl_1_0_0_sub1_layout1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'videoContentTitle',
                                                        'type' => 'text',
                                                        'instructions' => '1. Tiêu đề | 2. Link',
                                                    ),
                                                    array(
                                                        'key' => 'id_video_lhl_1_0_0_sub1_layout1_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'videoContentBox',
                                                        'type' => 'repeater',
                                                        'layout' => 'table',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_video_lhl_1_0_0_sub1_layout1_sub2_sub1',
                                                                'label' => '',
                                                                'name' => 'videoContentBoxInfo',
                                                                'type' => 'textarea',
                                                                'instructions' => '1. Tiêu đề video | 2. ID Youtobe',
                                                                'rows' => 2,
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                    ),
                                ),
                            ), 
                            'id_newsDetail_lhl_1_0_0' => array(
                                'key' => 'id_newsDetail_lhl_1_0_0',
                                'name' => 'newsDetail_lhl_1_0_0',
                                'label' => 'News Detail 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_newsDetail_lhl_1_0_0_sub1',
                                        'label' => '',
                                        'name' => 'video',
                                        'type' => 'flexible_content',
                                        'layouts' => array(
                                            'layout_vision' => array(
                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout1',
                                                'name' => 'vision',
                                                'label' => 'Vision',
                                                'display' => 'block',
                                                'sub_fields' => array(                                                   
                                                    array(
                                                        'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout1_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'visionBox',
                                                        'type' => 'repeater',
                                                        'layout' => 'block',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout1_sub2_sub1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'visionLink',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout1_sub2_sub2',
                                                                'label' => 'Nội dung',
                                                                'name' => 'visionContent',
                                                                'type' => 'wysiwyg',
                                                                'instructions' => '',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'layout_training' => array(
                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout2',
                                                'name' => 'training',
                                                'label' => 'Training',
                                                'display' => 'block',
                                                'sub_fields' => array(                                                   
                                                    array(
                                                        'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout2_sub2',
                                                        'label' => 'Nội dung',
                                                        'name' => 'trainingBox',
                                                        'type' => 'repeater',
                                                        'layout' => 'block',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout2_sub2_sub1',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'trainingLink',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_newsDetail_lhl_1_0_0_sub1_layout2_sub2_sub2',
                                                                'label' => 'Nội dung',
                                                                'name' => 'trainingContent',
                                                                'type' => 'wysiwyg',
                                                                'instructions' => '',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                    ),
                                ),
                            ),  
                            'id_contact_dls_1_0_0' => array(
                                'key' => 'id_contact_dls_1_0_0',
                                'name' => 'contact_dls_1_0_0',
                                'label' => 'contact 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_contact_dls_1_0_0_sub2',
                                        'label' => 'Nội dung',
                                        'name' => 'contact_content',
                                        'type' => 'wysiwyg',
                                    ),
                                ),
                            ),
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                          
                    array(      
                        'key' => 'group_page_field_site',
                        'label' => 'Cài đặt Website',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'site_custom',
                        'label' => '',
                        'name' => 'site_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_site',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                            'id_navSidebar_lhl_1_0_0' => array(
                                'key' => 'id_navSidebar_lhl_1_0_0',
                                'name' => 'navSidebar_lhl_1_0_0',
                                'label' => 'Sidebar 1.0.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_navSidebar_lhl_1_0_0_sub1',
                                        'label' => 'Tiêu đề',
                                        'name' => 'sidebar_title',
                                        'type' => 'text',
                                    ),
                                    array(
                                        'key' => 'id_navSidebar_lhl_1_0_0_sub2',
                                        'label' => 'Nội dung',
                                        'name' => 'sidebar_data',
                                        'type' => 'wysiwyg',
                                    ),
                                ),
                            ),
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),                     
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-cau-hinh-website',
                ),
            ),
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ),
            ),
            array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;
?>