<?php

return [

    'relation_manager' => [
        'title' => 'Katapatan',
        'description' => ':balance puntos · :lifetime puntos habang buhay · :tier antas',
    ],

    'tier' => [
        'label' => 'Antas',
    ],

    'types' => [
        'earn' => 'Kinita',
        'redeem' => 'Ginamit',
        'adjust' => 'Pagsasaayos',
    ],

    'columns' => [
        'created_at' => 'Petsa',
        'type' => 'Uri',
        'points' => 'Puntos',
        'reason' => 'Dahilan',
        'source' => 'Pinagmulan',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Isaayos ang puntos',
            'points_field' => 'Puntos',
            'reason_field' => 'Dahilan',
        ],
        'redeem_reward' => [
            'label' => 'Gamitin ang gantimpala',
            'reward_field' => 'Gantimpala',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Naisaayos ang puntos',
        'redeem_failed' => 'Hindi magamit ang gantimpala',
        'redeem_success' => 'Nagamit ang gantimpala',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Pangalan',
            'description' => 'Paglalarawan',
            'points_cost' => 'Halaga sa puntos',
            'stock' => 'Stock',
            'stock_helper' => 'Iwanang blangko para sa walang-limitasyong stock.',
            'active' => 'Aktibo',
        ],
        'stock_unlimited' => 'Walang limitasyon',
        'model_label' => 'Gantimpala sa katapatan',
        'plural_model_label' => 'Mga gantimpala sa katapatan',
        'navigation_label' => 'Mga gantimpala sa katapatan',
    ],

];
