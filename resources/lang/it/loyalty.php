<?php

return [

    'relation_manager' => [
        'title' => 'Fedeltà',
        'description' => ':balance punti · :lifetime punti totali · :tier livello',
    ],

    'tier' => [
        'label' => 'Livello',
    ],

    'types' => [
        'earn' => 'Guadagno',
        'redeem' => 'Riscatto',
        'adjust' => 'Rettifica',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Tipo',
        'points' => 'Punti',
        'reason' => 'Motivo',
        'source' => 'Origine',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Modifica punti',
            'points_field' => 'Punti',
            'reason_field' => 'Motivo',
        ],
        'redeem_reward' => [
            'label' => 'Riscatta premio',
            'reward_field' => 'Premio',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punti modificati',
        'redeem_failed' => 'Impossibile riscattare il premio',
        'redeem_success' => 'Premio riscattato',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nome',
            'description' => 'Descrizione',
            'points_cost' => 'Costo in punti',
            'stock' => 'Scorte',
            'stock_helper' => 'Lascia vuoto per scorte illimitate.',
            'active' => 'Attivo',
        ],
        'stock_unlimited' => 'Illimitato',
        'model_label' => 'Premio fedeltà',
        'plural_model_label' => 'Premi fedeltà',
        'navigation_label' => 'Premi fedeltà',
    ],

];
