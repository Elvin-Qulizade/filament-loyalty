<?php

return [

    'relation_manager' => [
        'title' => 'Лојалност',
        'description' => ':balance поени · :lifetime поени вкупно · :tier ниво',
    ],

    'tier' => [
        'label' => 'Ниво',
    ],

    'types' => [
        'earn' => 'Заработено',
        'redeem' => 'Искористено',
        'adjust' => 'Прилагодување',
    ],

    'columns' => [
        'created_at' => 'Датум',
        'type' => 'Тип',
        'points' => 'Поени',
        'reason' => 'Причина',
        'source' => 'Извор',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Прилагоди поени',
            'points_field' => 'Поени',
            'reason_field' => 'Причина',
        ],
        'redeem_reward' => [
            'label' => 'Искористи награда',
            'reward_field' => 'Награда',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Поените се прилагодени',
        'redeem_failed' => 'Наградата не можеше да се искористи',
        'redeem_success' => 'Наградата е искористена',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Име',
            'description' => 'Опис',
            'points_cost' => 'Цена во поени',
            'stock' => 'Залиха',
            'stock_helper' => 'Оставете празно за неограничена залиха.',
            'active' => 'Активна',
        ],
        'stock_unlimited' => 'Неограничено',
        'model_label' => 'Награда за лојалност',
        'plural_model_label' => 'Награди за лојалност',
        'navigation_label' => 'Награди за лојалност',
    ],

];
