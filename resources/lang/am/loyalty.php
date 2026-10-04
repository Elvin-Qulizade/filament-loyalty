<?php

return [

    'relation_manager' => [
        'title' => 'ታማኝነት',
        'description' => ':balance ነጥብ · :lifetime የህይወት ዘመን ነጥብ · :tier ደረጃ',
    ],

    'tier' => [
        'label' => 'ደረጃ',
    ],

    'types' => [
        'earn' => 'የተገኘ',
        'redeem' => 'የተመነዘረ',
        'adjust' => 'ማስተካከያ',
    ],

    'columns' => [
        'created_at' => 'ቀን',
        'type' => 'ዓይነት',
        'points' => 'ነጥቦች',
        'reason' => 'ምክንያት',
        'source' => 'ምንጭ',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ነጥቦችን አስተካክል',
            'points_field' => 'ነጥቦች',
            'reason_field' => 'ምክንያት',
        ],
        'redeem_reward' => [
            'label' => 'ሽልማት ይመንዝሩ',
            'reward_field' => 'ሽልማት',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ነጥቦች ተስተካክለዋል',
        'redeem_failed' => 'ሽልማቱን መመንዘር አልተቻለም',
        'redeem_success' => 'ሽልማቱ ተመንዝሯል',
    ],

    'reward' => [
        'fields' => [
            'name' => 'ስም',
            'description' => 'መግለጫ',
            'points_cost' => 'በነጥብ ዋጋ',
            'stock' => 'ክምችት',
            'stock_helper' => 'ላልተገደበ ክምችት ባዶ ይተዉት።',
            'active' => 'ገቢር',
        ],
        'stock_unlimited' => 'ያልተገደበ',
        'model_label' => 'የታማኝነት ሽልማት',
        'plural_model_label' => 'የታማኝነት ሽልማቶች',
        'navigation_label' => 'የታማኝነት ሽልማቶች',
    ],

];
