<?php

return [

    'relation_manager' => [
        'title' => 'Loialitate',
        'description' => ':balance puncte · :lifetime puncte totale · :tier nivel',
    ],

    'tier' => [
        'label' => 'Nivel',
    ],

    'types' => [
        'earn' => 'Câștigat',
        'redeem' => 'Răscumpărat',
        'adjust' => 'Ajustare',
    ],

    'columns' => [
        'created_at' => 'Dată',
        'type' => 'Tip',
        'points' => 'Puncte',
        'reason' => 'Motiv',
        'source' => 'Sursă',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ajustează punctele',
            'points_field' => 'Puncte',
            'reason_field' => 'Motiv',
        ],
        'redeem_reward' => [
            'label' => 'Răscumpără recompensa',
            'reward_field' => 'Recompensă',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Puncte ajustate',
        'redeem_failed' => 'Recompensa nu a putut fi răscumpărată',
        'redeem_success' => 'Recompensă răscumpărată',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nume',
            'description' => 'Descriere',
            'points_cost' => 'Cost în puncte',
            'stock' => 'Stoc',
            'stock_helper' => 'Lăsați gol pentru stoc nelimitat.',
            'active' => 'Activă',
        ],
        'stock_unlimited' => 'Nelimitat',
        'model_label' => 'Recompensă de loialitate',
        'plural_model_label' => 'Recompense de loialitate',
        'navigation_label' => 'Recompense de loialitate',
    ],

];
