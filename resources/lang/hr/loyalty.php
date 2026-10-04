<?php

return [

    'relation_manager' => [
        'title' => 'Vjernost',
        'description' => ':balance bodova · :lifetime bodova ukupno · :tier razina',
    ],

    'tier' => [
        'label' => 'Razina',
    ],

    'types' => [
        'earn' => 'Zarađeno',
        'redeem' => 'Iskorišteno',
        'adjust' => 'Prilagodba',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Vrsta',
        'points' => 'Bodovi',
        'reason' => 'Razlog',
        'source' => 'Izvor',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Prilagodi bodove',
            'points_field' => 'Bodovi',
            'reason_field' => 'Razlog',
        ],
        'redeem_reward' => [
            'label' => 'Iskoristi nagradu',
            'reward_field' => 'Nagrada',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Bodovi prilagođeni',
        'redeem_failed' => 'Nagradu nije moguće iskoristiti',
        'redeem_success' => 'Nagrada iskorištena',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Naziv',
            'description' => 'Opis',
            'points_cost' => 'Cijena u bodovima',
            'stock' => 'Zaliha',
            'stock_helper' => 'Ostavite prazno za neograničenu zalihu.',
            'active' => 'Aktivno',
        ],
        'stock_unlimited' => 'Neograničeno',
        'model_label' => 'Nagrada vjernosti',
        'plural_model_label' => 'Nagrade vjernosti',
        'navigation_label' => 'Nagrade vjernosti',
    ],

];
