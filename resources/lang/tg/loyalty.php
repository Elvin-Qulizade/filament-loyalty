<?php

return [

    'relation_manager' => [
        'title' => 'Садоқат',
        'description' => ':balance холл · :lifetime холи тамоми умр · :tier дараҷа',
    ],

    'tier' => [
        'label' => 'Дараҷа',
    ],

    'types' => [
        'earn' => 'Бадастовардашуда',
        'redeem' => 'Истифодашуда',
        'adjust' => 'Танзим',
    ],

    'columns' => [
        'created_at' => 'Сана',
        'type' => 'Навъ',
        'points' => 'Холҳо',
        'reason' => 'Сабаб',
        'source' => 'Манбаъ',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Танзими холҳо',
            'points_field' => 'Холҳо',
            'reason_field' => 'Сабаб',
        ],
        'redeem_reward' => [
            'label' => 'Истифодаи мукофот',
            'reward_field' => 'Мукофот',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Холҳо танзим шуданд',
        'redeem_failed' => 'Мукофот истифода нашуд',
        'redeem_success' => 'Мукофот истифода шуд',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Ном',
            'description' => 'Тавсиф',
            'points_cost' => 'Нархи холӣ',
            'stock' => 'Захира',
            'stock_helper' => 'Барои захираи номаҳдуд холӣ гузоред.',
            'active' => 'Фаъол',
        ],
        'stock_unlimited' => 'Номаҳдуд',
        'model_label' => 'Мукофоти садоқат',
        'plural_model_label' => 'Мукофотҳои садоқат',
        'navigation_label' => 'Мукофотҳои садоқат',
    ],

];
