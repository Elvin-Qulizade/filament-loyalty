<?php

return [

    'relation_manager' => [
        'title' => 'Sadakat',
        'description' => ':balance puan · :lifetime ömür boyu puan · :tier seviye',
    ],

    'tier' => [
        'label' => 'Seviye',
    ],

    'types' => [
        'earn' => 'Kazanım',
        'redeem' => 'Kullanım',
        'adjust' => 'Düzeltme',
    ],

    'columns' => [
        'created_at' => 'Tarih',
        'type' => 'Tür',
        'points' => 'Puan',
        'reason' => 'Sebep',
        'source' => 'Kaynak',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Puan düzelt',
            'points_field' => 'Puan',
            'reason_field' => 'Sebep',
        ],
        'redeem_reward' => [
            'label' => 'Ödül kullan',
            'reward_field' => 'Ödül',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Puan düzeltildi',
        'redeem_failed' => 'Ödül kullanılamadı',
        'redeem_success' => 'Ödül kullanıldı',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Ad',
            'description' => 'Açıklama',
            'points_cost' => 'Puan bedeli',
            'stock' => 'Stok',
            'stock_helper' => 'Sınırsız stok için boş bırakın.',
            'active' => 'Aktif',
        ],
        'stock_unlimited' => 'Sınırsız',
        'model_label' => 'Sadakat ödülü',
        'plural_model_label' => 'Sadakat ödülleri',
        'navigation_label' => 'Sadakat ödülleri',
    ],

];
