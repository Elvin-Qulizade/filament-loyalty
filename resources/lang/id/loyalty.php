<?php

return [

    'relation_manager' => [
        'title' => 'Loyalitas',
        'description' => ':balance poin · :lifetime poin seumur hidup · :tier tingkat',
    ],

    'tier' => [
        'label' => 'Tingkat',
    ],

    'types' => [
        'earn' => 'Perolehan',
        'redeem' => 'Penukaran',
        'adjust' => 'Penyesuaian',
    ],

    'columns' => [
        'created_at' => 'Tanggal',
        'type' => 'Jenis',
        'points' => 'Poin',
        'reason' => 'Alasan',
        'source' => 'Sumber',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Sesuaikan poin',
            'points_field' => 'Poin',
            'reason_field' => 'Alasan',
        ],
        'redeem_reward' => [
            'label' => 'Tukarkan hadiah',
            'reward_field' => 'Hadiah',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Poin disesuaikan',
        'redeem_failed' => 'Hadiah tidak dapat ditukarkan',
        'redeem_success' => 'Hadiah berhasil ditukarkan',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nama',
            'description' => 'Deskripsi',
            'points_cost' => 'Biaya poin',
            'stock' => 'Stok',
            'stock_helper' => 'Biarkan kosong untuk stok tak terbatas.',
            'active' => 'Aktif',
        ],
        'stock_unlimited' => 'Tak terbatas',
        'model_label' => 'Hadiah loyalitas',
        'plural_model_label' => 'Hadiah loyalitas',
        'navigation_label' => 'Hadiah loyalitas',
    ],

];
