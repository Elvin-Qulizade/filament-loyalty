<?php

return [

    'relation_manager' => [
        'title' => 'Fidelitat',
        'description' => ':balance punts · :lifetime punts totals · :tier nivell',
    ],

    'tier' => [
        'label' => 'Nivell',
    ],

    'types' => [
        'earn' => 'Guanyat',
        'redeem' => 'Bescanviat',
        'adjust' => 'Ajust',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Tipus',
        'points' => 'Punts',
        'reason' => 'Motiu',
        'source' => 'Origen',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ajustar punts',
            'points_field' => 'Punts',
            'reason_field' => 'Motiu',
        ],
        'redeem_reward' => [
            'label' => 'Bescanviar recompensa',
            'reward_field' => 'Recompensa',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punts ajustats',
        'redeem_failed' => 'No s\'ha pogut bescanviar la recompensa',
        'redeem_success' => 'Recompensa bescanviada',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nom',
            'description' => 'Descripció',
            'points_cost' => 'Cost en punts',
            'stock' => 'Estoc',
            'stock_helper' => 'Deixeu-ho buit per a estoc il·limitat.',
            'active' => 'Activa',
        ],
        'stock_unlimited' => 'Il·limitat',
        'model_label' => 'Recompensa de fidelitat',
        'plural_model_label' => 'Recompenses de fidelitat',
        'navigation_label' => 'Recompenses de fidelitat',
    ],

];
