<?php 
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
?>