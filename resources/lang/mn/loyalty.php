<?php

return [

    'relation_manager' => [
        'title' => 'Үнэнч байдал',
        'description' => ':balance оноо · :lifetime нийт оноо · :tier түвшин',
    ],

    'tier' => [
        'label' => 'Түвшин',
    ],

    'types' => [
        'earn' => 'Цуглуулсан',
        'redeem' => 'Ашигласан',
        'adjust' => 'Тохируулга',
    ],

    'columns' => [
        'created_at' => 'Огноо',
        'type' => 'Төрөл',
        'points' => 'Оноо',
        'reason' => 'Шалтгаан',
        'source' => 'Эх сурвалж',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Оноо тохируулах',
            'points_field' => 'Оноо',
            'reason_field' => 'Шалтгаан',
        ],
        'redeem_reward' => [
            'label' => 'Шагнал ашиглах',
            'reward_field' => 'Шагнал',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Оноо тохируулагдлаа',
        'redeem_failed' => 'Шагналыг ашиглаж чадсангүй',
        'redeem_success' => 'Шагнал ашиглагдлаа',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Нэр',
            'description' => 'Тайлбар',
            'points_cost' => 'Онооны үнэ',
            'stock' => 'Нөөц',
            'stock_helper' => 'Хязгааргүй нөөцийн хувьд хоосон орхино уу.',
            'active' => 'Идэвхтэй',
        ],
        'stock_unlimited' => 'Хязгааргүй',
        'model_label' => 'Үнэнч байдлын шагнал',
        'plural_model_label' => 'Үнэнч байдлын шагналууд',
        'navigation_label' => 'Үнэнч байдлын шагналууд',
    ],

];
