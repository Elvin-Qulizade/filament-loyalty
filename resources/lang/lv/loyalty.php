<?php

return [

    'relation_manager' => [
        'title' => 'Lojalitāte',
        'description' => ':balance punkti · :lifetime punkti kopā · :tier līmenis',
    ],

    'tier' => [
        'label' => 'Līmenis',
    ],

    'types' => [
        'earn' => 'Nopelnīts',
        'redeem' => 'Izmantots',
        'adjust' => 'Korekcija',
    ],

    'columns' => [
        'created_at' => 'Datums',
        'type' => 'Tips',
        'points' => 'Punkti',
        'reason' => 'Iemesls',
        'source' => 'Avots',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Koriģēt punktus',
            'points_field' => 'Punkti',
            'reason_field' => 'Iemesls',
        ],
        'redeem_reward' => [
            'label' => 'Izmantot balvu',
            'reward_field' => 'Balva',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punkti koriģēti',
        'redeem_failed' => 'Neizdevās izmantot balvu',
        'redeem_success' => 'Balva izmantota',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nosaukums',
            'description' => 'Apraksts',
            'points_cost' => 'Cena punktos',
            'stock' => 'Krājums',
            'stock_helper' => 'Atstājiet tukšu neierobežotam krājumam.',
            'active' => 'Aktīvs',
        ],
        'stock_unlimited' => 'Neierobežots',
        'model_label' => 'Lojalitātes balva',
        'plural_model_label' => 'Lojalitātes balvas',
        'navigation_label' => 'Lojalitātes balvas',
    ],

];
