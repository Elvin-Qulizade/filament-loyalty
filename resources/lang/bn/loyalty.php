<?php

return [

    'relation_manager' => [
        'title' => 'লয়্যালটি',
        'description' => ':balance পয়েন্ট · :lifetime মোট পয়েন্ট · :tier স্তর',
    ],

    'tier' => [
        'label' => 'স্তর',
    ],

    'types' => [
        'earn' => 'অর্জিত',
        'redeem' => 'ব্যবহৃত',
        'adjust' => 'সমন্বয়',
    ],

    'columns' => [
        'created_at' => 'তারিখ',
        'type' => 'ধরন',
        'points' => 'পয়েন্ট',
        'reason' => 'কারণ',
        'source' => 'উৎস',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'পয়েন্ট সমন্বয় করুন',
            'points_field' => 'পয়েন্ট',
            'reason_field' => 'কারণ',
        ],
        'redeem_reward' => [
            'label' => 'পুরস্কার ব্যবহার করুন',
            'reward_field' => 'পুরস্কার',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'পয়েন্ট সমন্বয় করা হয়েছে',
        'redeem_failed' => 'পুরস্কার ব্যবহার করা যায়নি',
        'redeem_success' => 'পুরস্কার ব্যবহৃত হয়েছে',
    ],

    'reward' => [
        'fields' => [
            'name' => 'নাম',
            'description' => 'বিবরণ',
            'points_cost' => 'পয়েন্ট খরচ',
            'stock' => 'স্টক',
            'stock_helper' => 'সীমাহীন স্টকের জন্য খালি রাখুন।',
            'active' => 'সক্রিয়',
        ],
        'stock_unlimited' => 'সীমাহীন',
        'model_label' => 'লয়্যালটি পুরস্কার',
        'plural_model_label' => 'লয়্যালটি পুরস্কারসমূহ',
        'navigation_label' => 'লয়্যালটি পুরস্কারসমূহ',
    ],

];
