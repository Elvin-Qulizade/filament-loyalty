<?php

return [

    'relation_manager' => [
        'title' => 'Sadiqlik',
        'description' => ':balance xal · :lifetime ömürlük xal · :tier səviyyə',
    ],

    'tier' => [
        'label' => 'Səviyyə',
    ],

    'types' => [
        'earn' => 'Qazanc',
        'redeem' => 'Xərcləmə',
        'adjust' => 'Düzəliş',
    ],

    'columns' => [
        'created_at' => 'Tarix',
        'type' => 'Növ',
        'points' => 'Xal',
        'reason' => 'Səbəb',
        'source' => 'Mənbə',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Xalları düzəlt',
            'points_field' => 'Xal',
            'reason_field' => 'Səbəb',
        ],
        'redeem_reward' => [
            'label' => 'Mükafatı istifadə et',
            'reward_field' => 'Mükafat',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Xallar düzəldildi',
        'redeem_failed' => 'Mükafat istifadə edilmədi',
        'redeem_success' => 'Mükafat istifadə edildi',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Ad',
            'description' => 'Təsvir',
            'points_cost' => 'Xal dəyəri',
            'stock' => 'Stok',
            'stock_helper' => 'Limitsiz stok üçün boş buraxın.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Limitsiz',
        'model_label' => 'Sadiqlik mükafatı',
        'plural_model_label' => 'Sadiqlik mükafatları',
        'navigation_label' => 'Sadiqlik mükafatları',
    ],

];
