<?php

return [

    'relation_manager' => [
        'title' => 'Лояльность',
        'description' => ':balance баллов · :lifetime баллов всего · :tier уровень',
    ],

    'tier' => [
        'label' => 'Уровень',
    ],

    'types' => [
        'earn' => 'Начислено',
        'redeem' => 'Списано',
        'adjust' => 'Корректировка',
    ],

    'columns' => [
        'created_at' => 'Дата',
        'type' => 'Тип',
        'points' => 'Баллы',
        'reason' => 'Причина',
        'source' => 'Источник',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Изменить баллы',
            'points_field' => 'Баллы',
            'reason_field' => 'Причина',
        ],
        'redeem_reward' => [
            'label' => 'Использовать награду',
            'reward_field' => 'Награда',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Баллы изменены',
        'redeem_failed' => 'Не удалось использовать награду',
        'redeem_success' => 'Награда использована',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Название',
            'description' => 'Описание',
            'points_cost' => 'Стоимость в баллах',
            'stock' => 'Остаток',
            'stock_helper' => 'Оставьте пустым для неограниченного остатка.',
            'active' => 'Активна',
        ],
        'stock_unlimited' => 'Неограниченно',
        'model_label' => 'Награда лояльности',
        'plural_model_label' => 'Награды лояльности',
        'navigation_label' => 'Награды лояльности',
    ],

];
