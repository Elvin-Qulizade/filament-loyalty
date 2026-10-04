<?php

return [

    'relation_manager' => [
        'title' => 'वफादारी',
        'description' => ':balance पोइन्ट · :lifetime जीवनभरका पोइन्ट · :tier तह',
    ],

    'tier' => [
        'label' => 'तह',
    ],

    'types' => [
        'earn' => 'आर्जित',
        'redeem' => 'रिडिम गरिएको',
        'adjust' => 'समायोजन',
    ],

    'columns' => [
        'created_at' => 'मिति',
        'type' => 'प्रकार',
        'points' => 'पोइन्ट',
        'reason' => 'कारण',
        'source' => 'स्रोत',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'पोइन्ट समायोजन गर्नुहोस्',
            'points_field' => 'पोइन्ट',
            'reason_field' => 'कारण',
        ],
        'redeem_reward' => [
            'label' => 'पुरस्कार रिडिम गर्नुहोस्',
            'reward_field' => 'पुरस्कार',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'पोइन्ट समायोजन भयो',
        'redeem_failed' => 'पुरस्कार रिडिम गर्न सकिएन',
        'redeem_success' => 'पुरस्कार रिडिम भयो',
    ],

    'reward' => [
        'fields' => [
            'name' => 'नाम',
            'description' => 'विवरण',
            'points_cost' => 'पोइन्ट लागत',
            'stock' => 'स्टक',
            'stock_helper' => 'असीमित स्टकको लागि खाली छोड्नुहोस्।',
            'active' => 'सक्रिय',
        ],
        'stock_unlimited' => 'असीमित',
        'model_label' => 'वफादारी पुरस्कार',
        'plural_model_label' => 'वफादारी पुरस्कारहरू',
        'navigation_label' => 'वफादारी पुरस्कारहरू',
    ],

];
