<?php
                            'id_video_da_1_1_0' => array(
                                'key' => 'id_video_da_1_1_0',
                                'name' => 'video_da_1_1_0',
                                'label' => 'Video 1.1.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'id_video_da_1_1_0_sub0',
                                        'label' => 'Tiêu đề',
                                        'name' => 'title',
                                        'type' => 'text',
                                    ),
                                    array(
                                        'key' => 'id_video_da_1_1_0_sub1',
                                        'label' => 'Nội dung',
                                        'name' => 'video',
                                        'type' => 'repeater',
                                        'layout' => 'block',
                                        'sub_fields' => array(
                                            array(
                                                'key' => 'id_video_da_1_1_0_sub1_sub1',
                                                'label' => 'Dịch vụ',
                                                'name' => 'videoService',
                                                'type' => 'text',  
                                                'instructions' => '1. Tiêu đề | 2. Link',                                              
                                            ),
                                            array(
                                                'key' => 'id_video_da_1_1_0_sub1_sub2',
                                                'label' => 'Hình ảnh',
                                                'name' => 'videoAlbum',
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