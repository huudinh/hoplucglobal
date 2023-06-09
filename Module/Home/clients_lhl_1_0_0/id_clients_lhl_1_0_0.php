<?php
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
?>