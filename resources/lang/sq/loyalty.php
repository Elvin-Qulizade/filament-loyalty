<?php

return [

    'relation_manager' => [
        'title' => 'Besnikëria',
        'description' => ':balance pikë · :lifetime pikë gjithsej · :tier nivel',
    ],

    'tier' => [
        'label' => 'Niveli',
    ],

    'types' => [
        'earn' => 'Fituar',
        'redeem' => 'Shfrytëzuar',
        'adjust' => 'Rregullim',
    ],

    'columns' => [
        'created_at' => 'Data',
        'type' => 'Lloji',
        'points' => 'Pikët',
        'reason' => 'Arsyeja',
        'source' => 'Burimi',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Rregullo pikët',
            'points_field' => 'Pikët',
            'reason_field' => 'Arsyeja',
        ],
        'redeem_reward' => [
            'label' => 'Shfrytëzo shpërblimin',
            'reward_field' => 'Shpërblimi',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Pikët u rregulluan',
        'redeem_failed' => 'Shpërblimi nuk mund të shfrytëzohej',
        'redeem_success' => 'Shpërblimi u shfrytëzua',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Emri',
            'description' => 'Përshkrimi',
            'points_cost' => 'Kostoja në pikë',
            'stock' => 'Stoku',
            'stock_helper' => 'Lëre bosh për stok të pakufizuar.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Pakufizuar',
        'model_label' => 'Shpërblim besnikërie',
        'plural_model_label' => 'Shpërblime besnikërie',
        'navigation_label' => 'Shpërblime besnikërie',
    ],

];
