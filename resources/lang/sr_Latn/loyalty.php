<?php

return [

    'relation_manager' => [
        'title' => 'Vernost',
        'description' => ':balance poena · :lifetime poena ukupno · :tier nivo',
    ],

    'tier' => [
        'label' => 'Nivo',
    ],

    'types' => [
        'earn' => 'Zarađeno',
        'redeem' => 'Iskorišćeno',
        'adjust' => 'Podešavanje',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Vrsta',
        'points' => 'Poeni',
        'reason' => 'Razlog',
        'source' => 'Izvor',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Podesi poene',
            'points_field' => 'Poeni',
            'reason_field' => 'Razlog',
        ],
        'redeem_reward' => [
            'label' => 'Iskoristi nagradu',
            'reward_field' => 'Nagrada',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Poeni podešeni',
        'redeem_failed' => 'Nagrada nije mogla biti iskorišćena',
        'redeem_success' => 'Nagrada iskorišćena',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Naziv',
            'description' => 'Opis',
            'points_cost' => 'Cena u poenima',
            'stock' => 'Zaliha',
            'stock_helper' => 'Ostavite prazno za neograničenu zalihu.',
            'active' => 'Aktivno',
        ],
        'stock_unlimited' => 'Neograničeno',
        'model_label' => 'Nagrada vernosti',
        'plural_model_label' => 'Nagrade vernosti',
        'navigation_label' => 'Nagrade vernosti',
    ],

];
