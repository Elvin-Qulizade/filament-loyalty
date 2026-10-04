<?php

return [

    'relation_manager' => [
        'title' => 'Vernosť',
        'description' => ':balance bodov · :lifetime bodov celkom · :tier úroveň',
    ],

    'tier' => [
        'label' => 'Úroveň',
    ],

    'types' => [
        'earn' => 'Získané',
        'redeem' => 'Čerpané',
        'adjust' => 'Úprava',
    ],

    'columns' => [
        'created_at' => 'Dátum',
        'type' => 'Typ',
        'points' => 'Body',
        'reason' => 'Dôvod',
        'source' => 'Zdroj',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Upraviť body',
            'points_field' => 'Body',
            'reason_field' => 'Dôvod',
        ],
        'redeem_reward' => [
            'label' => 'Uplatniť odmenu',
            'reward_field' => 'Odmena',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Body upravené',
        'redeem_failed' => 'Odmenu sa nepodarilo uplatniť',
        'redeem_success' => 'Odmena uplatnená',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Názov',
            'description' => 'Popis',
            'points_cost' => 'Cena v bodoch',
            'stock' => 'Sklad',
            'stock_helper' => 'Nechajte prázdne pre neobmedzené množstvo.',
            'active' => 'Aktívna',
        ],
        'stock_unlimited' => 'Neobmedzené',
        'model_label' => 'Vernostná odmena',
        'plural_model_label' => 'Vernostné odmeny',
        'navigation_label' => 'Vernostné odmeny',
    ],

];
