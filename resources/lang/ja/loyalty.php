<?php

return [

    'relation_manager' => [
        'title' => 'ロイヤルティ',
        'description' => ':balance ポイント · :lifetime 累計ポイント · :tier ティア',
    ],

    'tier' => [
        'label' => 'ティア',
    ],

    'types' => [
        'earn' => '獲得',
        'redeem' => '交換',
        'adjust' => '調整',
    ],

    'columns' => [
        'created_at' => '日付',
        'type' => '種類',
        'points' => 'ポイント',
        'reason' => '理由',
        'source' => 'ソース',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ポイントを調整',
            'points_field' => 'ポイント',
            'reason_field' => '理由',
        ],
        'redeem_reward' => [
            'label' => 'リワードを交換',
            'reward_field' => 'リワード',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ポイントを調整しました',
        'redeem_failed' => 'リワードを交換できませんでした',
        'redeem_success' => 'リワードを交換しました',
    ],

    'reward' => [
        'fields' => [
            'name' => '名前',
            'description' => '説明',
            'points_cost' => '必要ポイント',
            'stock' => '在庫',
            'stock_helper' => '在庫無制限にする場合は空欄のままにしてください。',
            'active' => '有効',
        ],
        'stock_unlimited' => '無制限',
        'model_label' => 'ロイヤルティリワード',
        'plural_model_label' => 'ロイヤルティリワード',
        'navigation_label' => 'ロイヤルティリワード',
    ],

];
