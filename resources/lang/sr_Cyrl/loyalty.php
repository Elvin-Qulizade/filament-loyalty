<?php

return [

    'relation_manager' => [
        'title' => 'Верност',
        'description' => ':balance поена · :lifetime поена укупно · :tier ниво',
    ],

    'tier' => [
        'label' => 'Ниво',
    ],

    'types' => [
        'earn' => 'Зарађено',
        'redeem' => 'Искоришћено',
        'adjust' => 'Подешавање',
    ],

    'columns' => [
        'created_at' => 'Датум',
        'type' => 'Врста',
        'points' => 'Поени',
        'reason' => 'Разлог',
        'source' => 'Извор',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Подеси поене',
            'points_field' => 'Поени',
            'reason_field' => 'Разлог',
        ],
        'redeem_reward' => [
            'label' => 'Искористи награду',
            'reward_field' => 'Награда',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Поени подешени',
        'redeem_failed' => 'Награда није могла бити искоришћена',
        'redeem_success' => 'Награда искоришћена',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Назив',
            'description' => 'Опис',
            'points_cost' => 'Цена у поенима',
            'stock' => 'Залиха',
            'stock_helper' => 'Оставите празно за неограничену залиху.',
            'active' => 'Активно',
        ],
        'stock_unlimited' => 'Неограничено',
        'model_label' => 'Награда верности',
        'plural_model_label' => 'Награде верности',
        'navigation_label' => 'Награде верности',
    ],

];
