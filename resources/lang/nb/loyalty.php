<?php

return [

    'relation_manager' => [
        'title' => 'Lojalitet',
        'description' => ':balance poeng · :lifetime poeng totalt · :tier nivå',
    ],

    'tier' => [
        'label' => 'Nivå',
    ],

    'types' => [
        'earn' => 'Opptjent',
        'redeem' => 'Innløst',
        'adjust' => 'Justering',
    ],

    'columns' => [
        'created_at' => 'Dato',
        'type' => 'Type',
        'points' => 'Poeng',
        'reason' => 'Årsak',
        'source' => 'Kilde',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Juster poeng',
            'points_field' => 'Poeng',
            'reason_field' => 'Årsak',
        ],
        'redeem_reward' => [
            'label' => 'Løs inn belønning',
            'reward_field' => 'Belønning',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Poeng justert',
        'redeem_failed' => 'Kunne ikke løse inn belønningen',
        'redeem_success' => 'Belønning løst inn',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Navn',
            'description' => 'Beskrivelse',
            'points_cost' => 'Poengkostnad',
            'stock' => 'Lager',
            'stock_helper' => 'La stå tomt for ubegrenset lager.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Ubegrenset',
        'model_label' => 'Lojalitetsbelønning',
        'plural_model_label' => 'Lojalitetsbelønninger',
        'navigation_label' => 'Lojalitetsbelønninger',
    ],

];
