<?php

return [

    'relation_manager' => [
        'title' => 'Lojaalsus',
        'description' => ':balance punkti · :lifetime punkti kokku · :tier tase',
    ],

    'tier' => [
        'label' => 'Tase',
    ],

    'types' => [
        'earn' => 'Teenitud',
        'redeem' => 'Kasutatud',
        'adjust' => 'Korrigeerimine',
    ],

    'columns' => [
        'created_at' => 'Kuupäev',
        'type' => 'Tüüp',
        'points' => 'Punktid',
        'reason' => 'Põhjus',
        'source' => 'Allikas',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Muuda punkte',
            'points_field' => 'Punktid',
            'reason_field' => 'Põhjus',
        ],
        'redeem_reward' => [
            'label' => 'Kasuta auhinda',
            'reward_field' => 'Auhind',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punktid muudetud',
        'redeem_failed' => 'Auhinda ei õnnestunud kasutada',
        'redeem_success' => 'Auhind kasutatud',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nimi',
            'description' => 'Kirjeldus',
            'points_cost' => 'Hind punktides',
            'stock' => 'Laoseis',
            'stock_helper' => 'Jäta tühjaks piiramatu laoseisu jaoks.',
            'active' => 'Aktiivne',
        ],
        'stock_unlimited' => 'Piiramatu',
        'model_label' => 'Lojaalsusauhind',
        'plural_model_label' => 'Lojaalsusauhinnad',
        'navigation_label' => 'Lojaalsusauhinnad',
    ],

];
