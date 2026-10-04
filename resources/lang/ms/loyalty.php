<?php

return [

    'relation_manager' => [
        'title' => 'Kesetiaan',
        'description' => ':balance mata · :lifetime mata sepanjang hayat · :tier tahap',
    ],

    'tier' => [
        'label' => 'Tahap',
    ],

    'types' => [
        'earn' => 'Diperoleh',
        'redeem' => 'Ditebus',
        'adjust' => 'Pelarasan',
    ],

    'columns' => [
        'created_at' => 'Tarikh',
        'type' => 'Jenis',
        'points' => 'Mata',
        'reason' => 'Sebab',
        'source' => 'Sumber',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Laraskan mata',
            'points_field' => 'Mata',
            'reason_field' => 'Sebab',
        ],
        'redeem_reward' => [
            'label' => 'Tebus ganjaran',
            'reward_field' => 'Ganjaran',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Mata dilaraskan',
        'redeem_failed' => 'Ganjaran tidak dapat ditebus',
        'redeem_success' => 'Ganjaran telah ditebus',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nama',
            'description' => 'Penerangan',
            'points_cost' => 'Kos mata',
            'stock' => 'Stok',
            'stock_helper' => 'Biarkan kosong untuk stok tanpa had.',
            'active' => 'Aktif',
        ],
        'stock_unlimited' => 'Tanpa had',
        'model_label' => 'Ganjaran kesetiaan',
        'plural_model_label' => 'Ganjaran kesetiaan',
        'navigation_label' => 'Ganjaran kesetiaan',
    ],

];
