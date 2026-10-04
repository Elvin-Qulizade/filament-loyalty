<?php

return [

    'relation_manager' => [
        'title' => 'Лоялност',
        'description' => ':balance точки · :lifetime точки общо · :tier ниво',
    ],

    'tier' => [
        'label' => 'Ниво',
    ],

    'types' => [
        'earn' => 'Спечелено',
        'redeem' => 'Осребрено',
        'adjust' => 'Корекция',
    ],

    'columns' => [
        'created_at' => 'Дата',
        'type' => 'Тип',
        'points' => 'Точки',
        'reason' => 'Причина',
        'source' => 'Източник',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Коригирай точки',
            'points_field' => 'Точки',
            'reason_field' => 'Причина',
        ],
        'redeem_reward' => [
            'label' => 'Осребри наградата',
            'reward_field' => 'Награда',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Точките са коригирани',
        'redeem_failed' => 'Наградата не можа да бъде осребрена',
        'redeem_success' => 'Наградата е осребрена',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Име',
            'description' => 'Описание',
            'points_cost' => 'Цена в точки',
            'stock' => 'Наличност',
            'stock_helper' => 'Оставете празно за неограничена наличност.',
            'active' => 'Активна',
        ],
        'stock_unlimited' => 'Неограничено',
        'model_label' => 'Награда за лоялност',
        'plural_model_label' => 'Награди за лоялност',
        'navigation_label' => 'Награди за лоялност',
    ],

];
