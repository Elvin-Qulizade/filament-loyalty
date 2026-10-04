<?php

return [

    'relation_manager' => [
        'title' => 'Rinawmna',
        'description' => ':balance points · :lifetime points zinga vai · :tier tier',
    ],

    'tier' => [
        'label' => 'Tier',
    ],

    'types' => [
        'earn' => 'Hlawh',
        'redeem' => 'Hman',
        'adjust' => 'Siam that',
    ],

    'columns' => [
        'created_at' => 'Ni',
        'type' => 'Pêk dan',
        'points' => 'Points',
        'reason' => 'Chhan awm',
        'source' => 'Hmuna',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Points siam that',
            'points_field' => 'Points',
            'reason_field' => 'Chhan awm',
        ],
        'redeem_reward' => [
            'label' => 'Lâwmman hman',
            'reward_field' => 'Lâwmman',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Points siam that a ni',
        'redeem_failed' => 'Lâwmman hman a theih lo',
        'redeem_success' => 'Lâwmman hman a ni',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Hming',
            'description' => 'Chanchin',
            'points_cost' => 'Points man',
            'stock' => 'Thil khawih',
            'stock_helper' => 'Thil khawih zawng zawng tur chuan ruak chhuah rawh.',
            'active' => 'Hmang mek',
        ],
        'stock_unlimited' => 'Zinga vai',
        'model_label' => 'Rinawmna lâwmman',
        'plural_model_label' => 'Rinawmna lâwmman',
        'navigation_label' => 'Rinawmna lâwmman',
    ],

];
