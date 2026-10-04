<?php

return [

    'relation_manager' => [
        'title' => 'وفاداری',
        'description' => ':balance امتیاز · :lifetime امتیاز مادام‌العمر · :tier سطح',
    ],

    'tier' => [
        'label' => 'سطح',
    ],

    'types' => [
        'earn' => 'کسب‌شده',
        'redeem' => 'استفاده‌شده',
        'adjust' => 'اصلاح',
    ],

    'columns' => [
        'created_at' => 'تاریخ',
        'type' => 'نوع',
        'points' => 'امتیاز',
        'reason' => 'دلیل',
        'source' => 'منبع',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'اصلاح امتیاز',
            'points_field' => 'امتیاز',
            'reason_field' => 'دلیل',
        ],
        'redeem_reward' => [
            'label' => 'استفاده از جایزه',
            'reward_field' => 'جایزه',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'امتیاز اصلاح شد',
        'redeem_failed' => 'استفاده از جایزه ممکن نشد',
        'redeem_success' => 'جایزه استفاده شد',
    ],

    'reward' => [
        'fields' => [
            'name' => 'نام',
            'description' => 'توضیحات',
            'points_cost' => 'هزینه به امتیاز',
            'stock' => 'موجودی',
            'stock_helper' => 'برای موجودی نامحدود خالی بگذارید.',
            'active' => 'فعال',
        ],
        'stock_unlimited' => 'نامحدود',
        'model_label' => 'جایزه وفاداری',
        'plural_model_label' => 'جوایز وفاداری',
        'navigation_label' => 'جوایز وفاداری',
    ],

];
