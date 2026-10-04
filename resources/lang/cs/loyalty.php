<?php

return [

    'relation_manager' => [
        'title' => 'Věrnost',
        'description' => ':balance bodů · :lifetime bodů celkem · :tier úroveň',
    ],

    'tier' => [
        'label' => 'Úroveň',
    ],

    'types' => [
        'earn' => 'Získáno',
        'redeem' => 'Čerpáno',
        'adjust' => 'Úprava',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Typ',
        'points' => 'Body',
        'reason' => 'Důvod',
        'source' => 'Zdroj',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Upravit body',
            'points_field' => 'Body',
            'reason_field' => 'Důvod',
        ],
        'redeem_reward' => [
            'label' => 'Uplatnit odměnu',
            'reward_field' => 'Odměna',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Body upraveny',
        'redeem_failed' => 'Odměnu se nepodařilo uplatnit',
        'redeem_success' => 'Odměna uplatněna',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Název',
            'description' => 'Popis',
            'points_cost' => 'Cena v bodech',
            'stock' => 'Sklad',
            'stock_helper' => 'Nechte prázdné pro neomezené množství.',
            'active' => 'Aktivní',
        ],
        'stock_unlimited' => 'Neomezeně',
        'model_label' => 'Věrnostní odměna',
        'plural_model_label' => 'Věrnostní odměny',
        'navigation_label' => 'Věrnostní odměny',
    ],

];
