<?php

return [

    'relation_manager' => [
        'title' => 'Lojalność',
        'description' => ':balance punktów · :lifetime punktów łącznie · :tier poziom',
    ],

    'tier' => [
        'label' => 'Poziom',
    ],

    'types' => [
        'earn' => 'Zdobyte',
        'redeem' => 'Wykorzystane',
        'adjust' => 'Korekta',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Typ',
        'points' => 'Punkty',
        'reason' => 'Powód',
        'source' => 'Źródło',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Dostosuj punkty',
            'points_field' => 'Punkty',
            'reason_field' => 'Powód',
        ],
        'redeem_reward' => [
            'label' => 'Wykorzystaj nagrodę',
            'reward_field' => 'Nagroda',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punkty dostosowane',
        'redeem_failed' => 'Nie udało się wykorzystać nagrody',
        'redeem_success' => 'Nagroda wykorzystana',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nazwa',
            'description' => 'Opis',
            'points_cost' => 'Koszt w punktach',
            'stock' => 'Stan magazynowy',
            'stock_helper' => 'Pozostaw puste dla nieograniczonego stanu.',
            'active' => 'Aktywna',
        ],
        'stock_unlimited' => 'Nieograniczony',
        'model_label' => 'Nagroda lojalnościowa',
        'plural_model_label' => 'Nagrody lojalnościowe',
        'navigation_label' => 'Nagrody lojalnościowe',
    ],

];
