<?php

return [

    'relation_manager' => [
        'title' => 'Leialtasuna',
        'description' => ':balance puntu · :lifetime bizitza osoko puntu · :tier maila',
    ],

    'tier' => [
        'label' => 'Maila',
    ],

    'types' => [
        'earn' => 'Irabazita',
        'redeem' => 'Erabilita',
        'adjust' => 'Doikuntza',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Mota',
        'points' => 'Puntuak',
        'reason' => 'Arrazoia',
        'source' => 'Iturria',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Doitu puntuak',
            'points_field' => 'Puntuak',
            'reason_field' => 'Arrazoia',
        ],
        'redeem_reward' => [
            'label' => 'Erabili saria',
            'reward_field' => 'Saria',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Puntuak doitu dira',
        'redeem_failed' => 'Ezin izan da saria erabili',
        'redeem_success' => 'Saria erabili da',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Izena',
            'description' => 'Deskribapena',
            'points_cost' => 'Kostua puntutan',
            'stock' => 'Stocka',
            'stock_helper' => 'Utzi hutsik stock mugagabea izateko.',
            'active' => 'Aktibo',
        ],
        'stock_unlimited' => 'Mugagabea',
        'model_label' => 'Leialtasun saria',
        'plural_model_label' => 'Leialtasun sariak',
        'navigation_label' => 'Leialtasun sariak',
    ],

];
