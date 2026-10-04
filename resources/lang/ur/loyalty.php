<?php

return [

    'relation_manager' => [
        'title' => 'وفاداری',
        'description' => ':balance پوائنٹس · :lifetime تاحیات پوائنٹس · :tier درجہ',
    ],

    'tier' => [
        'label' => 'درجہ',
    ],

    'types' => [
        'earn' => 'حاصل شدہ',
        'redeem' => 'استعمال شدہ',
        'adjust' => 'ترمیم',
    ],

    'columns' => [
        'created_at' => 'تاریخ',
        'type' => 'قسم',
        'points' => 'پوائنٹس',
        'reason' => 'وجہ',
        'source' => 'ماخذ',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'پوائنٹس ترمیم کریں',
            'points_field' => 'پوائنٹس',
            'reason_field' => 'وجہ',
        ],
        'redeem_reward' => [
            'label' => 'انعام استعمال کریں',
            'reward_field' => 'انعام',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'پوائنٹس میں ترمیم ہوئی',
        'redeem_failed' => 'انعام استعمال نہیں ہو سکا',
        'redeem_success' => 'انعام استعمال ہو گیا',
    ],

    'reward' => [
        'fields' => [
            'name' => 'نام',
            'description' => 'تفصیل',
            'points_cost' => 'پوائنٹس میں قیمت',
            'stock' => 'اسٹاک',
            'stock_helper' => 'لامحدود اسٹاک کے لیے خالی چھوڑ دیں۔',
            'active' => 'فعال',
        ],
        'stock_unlimited' => 'لامحدود',
        'model_label' => 'وفاداری کا انعام',
        'plural_model_label' => 'وفاداری کے انعامات',
        'navigation_label' => 'وفاداری کے انعامات',
    ],

];
