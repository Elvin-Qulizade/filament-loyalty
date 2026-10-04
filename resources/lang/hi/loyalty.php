<?php

return [

    'relation_manager' => [
        'title' => 'लॉयल्टी',
        'description' => ':balance पॉइंट्स · :lifetime कुल पॉइंट्स · :tier स्तर',
    ],

    'tier' => [
        'label' => 'स्तर',
    ],

    'types' => [
        'earn' => 'अर्जित',
        'redeem' => 'भुनाया गया',
        'adjust' => 'समायोजन',
    ],

    'columns' => [
        'created_at' => 'तारीख़',
        'type' => 'प्रकार',
        'points' => 'पॉइंट्स',
        'reason' => 'कारण',
        'source' => 'स्रोत',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'पॉइंट्स समायोजित करें',
            'points_field' => 'पॉइंट्स',
            'reason_field' => 'कारण',
        ],
        'redeem_reward' => [
            'label' => 'रिवॉर्ड भुनाएं',
            'reward_field' => 'रिवॉर्ड',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'पॉइंट्स समायोजित किए गए',
        'redeem_failed' => 'रिवॉर्ड भुनाया नहीं जा सका',
        'redeem_success' => 'रिवॉर्ड भुनाया गया',
    ],

    'reward' => [
        'fields' => [
            'name' => 'नाम',
            'description' => 'विवरण',
            'points_cost' => 'पॉइंट्स लागत',
            'stock' => 'स्टॉक',
            'stock_helper' => 'असीमित स्टॉक के लिए खाली छोड़ें।',
            'active' => 'सक्रिय',
        ],
        'stock_unlimited' => 'असीमित',
        'model_label' => 'लॉयल्टी रिवॉर्ड',
        'plural_model_label' => 'लॉयल्टी रिवॉर्ड्स',
        'navigation_label' => 'लॉयल्टी रिवॉर्ड्स',
    ],

];
