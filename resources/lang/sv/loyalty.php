<?php

return [

    'relation_manager' => [
        'title' => 'Lojalitet',
        'description' => ':balance poäng · :lifetime poäng totalt · :tier nivå',
    ],

    'tier' => [
        'label' => 'Nivå',
    ],

    'types' => [
        'earn' => 'Intjänat',
        'redeem' => 'Inlöst',
        'adjust' => 'Justering',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Typ',
        'points' => 'Poäng',
        'reason' => 'Anledning',
        'source' => 'Källa',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Justera poäng',
            'points_field' => 'Poäng',
            'reason_field' => 'Anledning',
        ],
        'redeem_reward' => [
            'label' => 'Lös in belöning',
            'reward_field' => 'Belöning',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Poäng justerade',
        'redeem_failed' => 'Kunde inte lösa in belöningen',
        'redeem_success' => 'Belöning inlöst',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Namn',
            'description' => 'Beskrivning',
            'points_cost' => 'Poängkostnad',
            'stock' => 'Lager',
            'stock_helper' => 'Lämna tomt för obegränsat lager.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Obegränsat',
        'model_label' => 'Lojalitetsbelöning',
        'plural_model_label' => 'Lojalitetsbelöningar',
        'navigation_label' => 'Lojalitetsbelöningar',
    ],

];
