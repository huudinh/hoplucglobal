<?php
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
?>