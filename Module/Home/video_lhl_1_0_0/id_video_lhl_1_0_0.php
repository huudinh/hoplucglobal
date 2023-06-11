<?php
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
?>