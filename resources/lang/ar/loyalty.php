<?php

return [

    'relation_manager' => [
        'title' => 'الولاء',
        'description' => ':balance نقطة · :lifetime نقطة إجمالاً · :tier المستوى',
    ],

    'tier' => [
        'label' => 'المستوى',
    ],

    'types' => [
        'earn' => 'اكتساب',
        'redeem' => 'استبدال',
        'adjust' => 'تعديل',
    ],

    'columns' => [
        'created_at' => 'التاريخ',
        'type' => 'النوع',
        'points' => 'النقاط',
        'reason' => 'السبب',
        'source' => 'المصدر',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'تعديل النقاط',
            'points_field' => 'النقاط',
            'reason_field' => 'السبب',
        ],
        'redeem_reward' => [
            'label' => 'استبدال المكافأة',
            'reward_field' => 'المكافأة',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'تم تعديل النقاط',
        'redeem_failed' => 'تعذّر استبدال المكافأة',
        'redeem_success' => 'تم استبدال المكافأة',
    ],

    'reward' => [
        'fields' => [
            'name' => 'الاسم',
            'description' => 'الوصف',
            'points_cost' => 'التكلفة بالنقاط',
            'stock' => 'المخزون',
            'stock_helper' => 'اتركه فارغًا لمخزون غير محدود.',
            'active' => 'نشط',
        ],
        'stock_unlimited' => 'غير محدود',
        'model_label' => 'مكافأة الولاء',
        'plural_model_label' => 'مكافآت الولاء',
        'navigation_label' => 'مكافآت الولاء',
    ],

];
