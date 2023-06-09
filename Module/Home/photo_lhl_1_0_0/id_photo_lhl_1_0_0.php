<?php
                            'id_photo_lhl_1_0_0' => array(
                                'key' => 'id_photo_lhl_1_0_0',
                                'name' => 'photo_lhl_1_0_0',
                                'label' => 'Photo 1.1.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_photo_lhl_1_0_0_sub0',
                                        'label' => 'Tiêu đề',
                                        'name' => 'title',
                                        'type' => 'text',
                                    ),
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
?>