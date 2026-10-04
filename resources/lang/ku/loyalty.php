<?php

return [

    'relation_manager' => [
        'title' => 'Dilsozî',
        'description' => ':balance xal · :lifetime xalên hemû emrî · :tier asta',
    ],

    'tier' => [
        'label' => 'Asta',
    ],

    'types' => [
        'earn' => 'Bidestxistin',
        'redeem' => 'Bikaranîn',
        'adjust' => 'Rastkirin',
    ],

    'columns' => [
        'created_at' => 'Dîrok',
        'type' => 'Cure',
        'points' => 'Xal',
        'reason' => 'Sedem',
        'source' => 'Çavkanî',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Xalan rast bike',
            'points_field' => 'Xal',
            'reason_field' => 'Sedem',
        ],
        'redeem_reward' => [
            'label' => 'Xelatê bikar bîne',
            'reward_field' => 'Xelat',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Xal hatin rastkirin',
        'redeem_failed' => 'Xelat nehate bikaranîn',
        'redeem_success' => 'Xelat hate bikaranîn',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nav',
            'description' => 'Danasîn',
            'points_cost' => 'Bihayê bi xalan',
            'stock' => 'Depo',
            'stock_helper' => 'Ji bo depoyê bêsînor vala bihêle.',
            'active' => 'Çalak',
        ],
        'stock_unlimited' => 'Bêsînor',
        'model_label' => 'Xelata dilsozî',
        'plural_model_label' => 'Xelatên dilsozî',
        'navigation_label' => 'Xelatên dilsozî',
    ],

];
