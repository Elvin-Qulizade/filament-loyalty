<?php

return [

    'relation_manager' => [
        'title' => 'Fidelidad',
        'description' => ':balance puntos · :lifetime puntos totales · :tier nivel',
    ],

    'tier' => [
        'label' => 'Nivel',
    ],

    'types' => [
        'earn' => 'Ganancia',
        'redeem' => 'Canje',
        'adjust' => 'Ajuste',
    ],

    'columns' => [
        'created_at' => 'Fecha',
        'type' => 'Tipo',
        'points' => 'Puntos',
        'reason' => 'Motivo',
        'source' => 'Origen',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ajustar puntos',
            'points_field' => 'Puntos',
            'reason_field' => 'Motivo',
        ],
        'redeem_reward' => [
            'label' => 'Canjear recompensa',
            'reward_field' => 'Recompensa',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Puntos ajustados',
        'redeem_failed' => 'No se pudo canjear la recompensa',
        'redeem_success' => 'Recompensa canjeada',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nombre',
            'description' => 'Descripción',
            'points_cost' => 'Coste en puntos',
            'stock' => 'Stock',
            'stock_helper' => 'Déjalo vacío para stock ilimitado.',
            'active' => 'Activo',
        ],
        'stock_unlimited' => 'Ilimitado',
        'model_label' => 'Recompensa de fidelidad',
        'plural_model_label' => 'Recompensas de fidelidad',
        'navigation_label' => 'Recompensas de fidelidad',
    ],

];
