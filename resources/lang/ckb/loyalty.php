<?php

return [

    'relation_manager' => [
        'title' => 'دڵسۆزی',
        'description' => ':balance خاڵ · :lifetime خاڵی هەموو ژیانی · :tier ئاست',
    ],

    'tier' => [
        'label' => 'ئاست',
    ],

    'types' => [
        'earn' => 'بەدەستهاتوو',
        'redeem' => 'بەکارهاتوو',
        'adjust' => 'ڕێکخستن',
    ],

    'columns' => [
        'created_at' => 'بەروار',
        'type' => 'جۆر',
        'points' => 'خاڵ',
        'reason' => 'هۆکار',
        'source' => 'سەرچاوە',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ڕێکخستنی خاڵەکان',
            'points_field' => 'خاڵ',
            'reason_field' => 'هۆکار',
        ],
        'redeem_reward' => [
            'label' => 'بەکارهێنانی خەڵات',
            'reward_field' => 'خەڵات',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'خاڵەکان ڕێکخران',
        'redeem_failed' => 'نەتوانرا خەڵاتەکە بەکاربهێنرێت',
        'redeem_success' => 'خەڵاتەکە بەکارهات',
    ],

    'reward' => [
        'fields' => [
            'name' => 'ناو',
            'description' => 'وەسف',
            'points_cost' => 'نرخ بە خاڵ',
            'stock' => 'کۆگا',
            'stock_helper' => 'بۆ کۆگای بێسنوور بەتاڵی بهێڵەرەوە.',
            'active' => 'چالاک',
        ],
        'stock_unlimited' => 'بێسنوور',
        'model_label' => 'خەڵاتی دڵسۆزی',
        'plural_model_label' => 'خەڵاتەکانی دڵسۆزی',
        'navigation_label' => 'خەڵاتەکانی دڵسۆزی',
    ],

];
