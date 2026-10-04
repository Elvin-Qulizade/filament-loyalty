<?php

return [

    'relation_manager' => [
        'title' => 'Zvestoba',
        'description' => ':balance točk · :lifetime točk skupaj · :tier raven',
    ],

    'tier' => [
        'label' => 'Raven',
    ],

    'types' => [
        'earn' => 'Pridobljeno',
        'redeem' => 'Unovčeno',
        'adjust' => 'Prilagoditev',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Vrsta',
        'points' => 'Točke',
        'reason' => 'Razlog',
        'source' => 'Vir',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Prilagodi točke',
            'points_field' => 'Točke',
            'reason_field' => 'Razlog',
        ],
        'redeem_reward' => [
            'label' => 'Unovči nagrado',
            'reward_field' => 'Nagrada',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Točke prilagojene',
        'redeem_failed' => 'Nagrade ni bilo mogoče unovčiti',
        'redeem_success' => 'Nagrada unovčena',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Ime',
            'description' => 'Opis',
            'points_cost' => 'Cena v točkah',
            'stock' => 'Zaloga',
            'stock_helper' => 'Pustite prazno za neomejeno zalogo.',
            'active' => 'Aktivno',
        ],
        'stock_unlimited' => 'Neomejeno',
        'model_label' => 'Nagrada za zvestobo',
        'plural_model_label' => 'Nagrade za zvestobo',
        'navigation_label' => 'Nagrade za zvestobo',
    ],

];
