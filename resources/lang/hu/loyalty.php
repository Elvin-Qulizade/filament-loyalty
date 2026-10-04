<?php

return [

    'relation_manager' => [
        'title' => 'Hűség',
        'description' => ':balance pont · :lifetime pont összesen · :tier szint',
    ],

    'tier' => [
        'label' => 'Szint',
    ],

    'types' => [
        'earn' => 'Jóváírás',
        'redeem' => 'Beváltás',
        'adjust' => 'Korrekció',
    ],

    'columns' => [
        'created_at' => 'Dátum',
        'type' => 'Típus',
        'points' => 'Pont',
        'reason' => 'Indok',
        'source' => 'Forrás',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Pontok módosítása',
            'points_field' => 'Pont',
            'reason_field' => 'Indok',
        ],
        'redeem_reward' => [
            'label' => 'Jutalom beváltása',
            'reward_field' => 'Jutalom',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Pontok módosítva',
        'redeem_failed' => 'A jutalmat nem sikerült beváltani',
        'redeem_success' => 'Jutalom beváltva',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Név',
            'description' => 'Leírás',
            'points_cost' => 'Pont ár',
            'stock' => 'Készlet',
            'stock_helper' => 'Korlátlan készlethez hagyja üresen.',
            'active' => 'Aktív',
        ],
        'stock_unlimited' => 'Korlátlan',
        'model_label' => 'Hűségjutalom',
        'plural_model_label' => 'Hűségjutalmak',
        'navigation_label' => 'Hűségjutalmak',
    ],

];
