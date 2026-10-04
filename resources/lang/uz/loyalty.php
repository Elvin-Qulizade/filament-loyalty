<?php

return [

    'relation_manager' => [
        'title' => 'Sodiqlik',
        'description' => ':balance ball · :lifetime umrbod ball · :tier daraja',
    ],

    'tier' => [
        'label' => 'Daraja',
    ],

    'types' => [
        'earn' => 'Ishlab topilgan',
        'redeem' => 'Ishlatilgan',
        'adjust' => 'Tuzatish',
    ],

    'columns' => [
        'created_at' => 'Sana',
        'type' => 'Turi',
        'points' => 'Ball',
        'reason' => 'Sabab',
        'source' => 'Manba',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ballarni tuzatish',
            'points_field' => 'Ball',
            'reason_field' => 'Sabab',
        ],
        'redeem_reward' => [
            'label' => 'Mukofotni ishlatish',
            'reward_field' => 'Mukofot',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Ballar tuzatildi',
        'redeem_failed' => 'Mukofotni ishlatib bo\'lmadi',
        'redeem_success' => 'Mukofot ishlatildi',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nomi',
            'description' => 'Tavsif',
            'points_cost' => 'Ball narxi',
            'stock' => 'Ombor',
            'stock_helper' => 'Cheksiz ombor uchun bo\'sh qoldiring.',
            'active' => 'Faol',
        ],
        'stock_unlimited' => 'Cheksiz',
        'model_label' => 'Sodiqlik mukofoti',
        'plural_model_label' => 'Sodiqlik mukofotlari',
        'navigation_label' => 'Sodiqlik mukofotlari',
    ],

];
