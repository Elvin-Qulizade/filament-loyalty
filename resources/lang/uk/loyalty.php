<?php

return [

    'relation_manager' => [
        'title' => 'Лояльність',
        'description' => ':balance балів · :lifetime балів за весь час · :tier рівень',
    ],

    'tier' => [
        'label' => 'Рівень',
    ],

    'types' => [
        'earn' => 'Нараховано',
        'redeem' => 'Використано',
        'adjust' => 'Коригування',
    ],

    'columns' => [
        'created_at' => 'Дата',
        'type' => 'Тип',
        'points' => 'Бали',
        'reason' => 'Причина',
        'source' => 'Джерело',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Скоригувати бали',
            'points_field' => 'Бали',
            'reason_field' => 'Причина',
        ],
        'redeem_reward' => [
            'label' => 'Використати нагороду',
            'reward_field' => 'Нагорода',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Бали скориговано',
        'redeem_failed' => 'Не вдалося використати нагороду',
        'redeem_success' => 'Нагороду використано',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Назва',
            'description' => 'Опис',
            'points_cost' => 'Вартість у балах',
            'stock' => 'Запас',
            'stock_helper' => 'Залиште порожнім для необмеженого запасу.',
            'active' => 'Активна',
        ],
        'stock_unlimited' => 'Необмежено',
        'model_label' => 'Нагорода лояльності',
        'plural_model_label' => 'Нагороди лояльності',
        'navigation_label' => 'Нагороди лояльності',
    ],

];
