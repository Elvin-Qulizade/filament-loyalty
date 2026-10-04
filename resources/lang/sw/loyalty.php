<?php

return [

    'relation_manager' => [
        'title' => 'Uaminifu',
        'description' => ':balance pointi · :lifetime pointi za maisha · :tier kiwango',
    ],

    'tier' => [
        'label' => 'Kiwango',
    ],

    'types' => [
        'earn' => 'Imepatikana',
        'redeem' => 'Imetumika',
        'adjust' => 'Marekebisho',
    ],

    'columns' => [
        'created_at' => 'Tarehe',
        'type' => 'Aina',
        'points' => 'Pointi',
        'reason' => 'Sababu',
        'source' => 'Chanzo',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Rekebisha pointi',
            'points_field' => 'Pointi',
            'reason_field' => 'Sababu',
        ],
        'redeem_reward' => [
            'label' => 'Tumia zawadi',
            'reward_field' => 'Zawadi',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Pointi zimerekebishwa',
        'redeem_failed' => 'Imeshindwa kutumia zawadi',
        'redeem_success' => 'Zawadi imetumika',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Jina',
            'description' => 'Maelezo',
            'points_cost' => 'Gharama kwa pointi',
            'stock' => 'Hisa',
            'stock_helper' => 'Acha wazi kwa hisa zisizo na kikomo.',
            'active' => 'Inatumika',
        ],
        'stock_unlimited' => 'Zisizo na kikomo',
        'model_label' => 'Zawadi ya uaminifu',
        'plural_model_label' => 'Zawadi za uaminifu',
        'navigation_label' => 'Zawadi za uaminifu',
    ],

];
