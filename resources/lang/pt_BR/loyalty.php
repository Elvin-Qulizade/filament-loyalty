<?php

return [

    'relation_manager' => [
        'title' => 'Fidelidade',
        'description' => ':balance pontos · :lifetime pontos totais · :tier nível',
    ],

    'tier' => [
        'label' => 'Nível',
    ],

    'types' => [
        'earn' => 'Ganho',
        'redeem' => 'Resgate',
        'adjust' => 'Ajuste',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Tipo',
        'points' => 'Pontos',
        'reason' => 'Motivo',
        'source' => 'Origem',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ajustar pontos',
            'points_field' => 'Pontos',
            'reason_field' => 'Motivo',
        ],
        'redeem_reward' => [
            'label' => 'Resgatar recompensa',
            'reward_field' => 'Recompensa',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Pontos ajustados',
        'redeem_failed' => 'Não foi possível resgatar a recompensa',
        'redeem_success' => 'Recompensa resgatada',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nome',
            'description' => 'Descrição',
            'points_cost' => 'Custo em pontos',
            'stock' => 'Estoque',
            'stock_helper' => 'Deixe vazio para estoque ilimitado.',
            'active' => 'Ativo',
        ],
        'stock_unlimited' => 'Ilimitado',
        'model_label' => 'Recompensa de fidelidade',
        'plural_model_label' => 'Recompensas de fidelidade',
        'navigation_label' => 'Recompensas de fidelidade',
    ],

];
