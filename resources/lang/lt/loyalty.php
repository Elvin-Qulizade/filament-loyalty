<?php

return [

    'relation_manager' => [
        'title' => 'Lojalumas',
        'description' => ':balance taškų · :lifetime taškų iš viso · :tier lygis',
    ],

    'tier' => [
        'label' => 'Lygis',
    ],

    'types' => [
        'earn' => 'Uždirbta',
        'redeem' => 'Išleista',
        'adjust' => 'Koregavimas',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Tipas',
        'points' => 'Taškai',
        'reason' => 'Priežastis',
        'source' => 'Šaltinis',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Koreguoti taškus',
            'points_field' => 'Taškai',
            'reason_field' => 'Priežastis',
        ],
        'redeem_reward' => [
            'label' => 'Panaudoti apdovanojimą',
            'reward_field' => 'Apdovanojimas',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Taškai pakoreguoti',
        'redeem_failed' => 'Nepavyko panaudoti apdovanojimo',
        'redeem_success' => 'Apdovanojimas panaudotas',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Pavadinimas',
            'description' => 'Aprašymas',
            'points_cost' => 'Kaina taškais',
            'stock' => 'Likutis',
            'stock_helper' => 'Palikite tuščią neribotam likučiui.',
            'active' => 'Aktyvus',
        ],
        'stock_unlimited' => 'Neribotas',
        'model_label' => 'Lojalumo apdovanojimas',
        'plural_model_label' => 'Lojalumo apdovanojimai',
        'navigation_label' => 'Lojalumo apdovanojimai',
    ],

];
