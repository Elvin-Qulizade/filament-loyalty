<?php

return [

    'relation_manager' => [
        'title' => 'Loyalitet',
        'description' => ':balance point · :lifetime point i alt · :tier niveau',
    ],

    'tier' => [
        'label' => 'Niveau',
    ],

    'types' => [
        'earn' => 'Optjent',
        'redeem' => 'Indløst',
        'adjust' => 'Justering',
    ],

    'columns' => [
        'created_at' => 'Dato',
        'type' => 'Type',
        'points' => 'Point',
        'reason' => 'Årsag',
        'source' => 'Kilde',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Juster point',
            'points_field' => 'Point',
            'reason_field' => 'Årsag',
        ],
        'redeem_reward' => [
            'label' => 'Indløs belønning',
            'reward_field' => 'Belønning',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Point justeret',
        'redeem_failed' => 'Kunne ikke indløse belønningen',
        'redeem_success' => 'Belønning indløst',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Navn',
            'description' => 'Beskrivelse',
            'points_cost' => 'Pointpris',
            'stock' => 'Lager',
            'stock_helper' => 'Lad stå tomt for ubegrænset lager.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Ubegrænset',
        'model_label' => 'Loyalitetsbelønning',
        'plural_model_label' => 'Loyalitetsbelønninger',
        'navigation_label' => 'Loyalitetsbelønninger',
    ],

];
