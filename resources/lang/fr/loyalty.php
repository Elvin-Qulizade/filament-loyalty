<?php

return [

    'relation_manager' => [
        'title' => 'Fidélité',
        'description' => ':balance points · :lifetime points à vie · :tier palier',
    ],

    'tier' => [
        'label' => 'Palier',
    ],

    'types' => [
        'earn' => 'Gain',
        'redeem' => 'Utilisation',
        'adjust' => 'Ajustement',
    ],

    'columns' => [
        'created_at' => 'Date',
        'type' => 'Type',
        'points' => 'Points',
        'reason' => 'Motif',
        'source' => 'Source',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ajuster les points',
            'points_field' => 'Points',
            'reason_field' => 'Motif',
        ],
        'redeem_reward' => [
            'label' => 'Utiliser la récompense',
            'reward_field' => 'Récompense',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Points ajustés',
        'redeem_failed' => 'Impossible d\'utiliser la récompense',
        'redeem_success' => 'Récompense utilisée',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nom',
            'description' => 'Description',
            'points_cost' => 'Coût en points',
            'stock' => 'Stock',
            'stock_helper' => 'Laisser vide pour un stock illimité.',
            'active' => 'Active',
        ],
        'stock_unlimited' => 'Illimité',
        'model_label' => 'Récompense de fidélité',
        'plural_model_label' => 'Récompenses de fidélité',
        'navigation_label' => 'Récompenses de fidélité',
    ],

];
