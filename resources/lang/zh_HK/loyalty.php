<?php

return [

    'relation_manager' => [
        'title' => '忠誠度',
        'description' => ':balance 點數 · :lifetime 累計點數 · :tier 等級',
    ],

    'tier' => [
        'label' => '等級',
    ],

    'types' => [
        'earn' => '獲得',
        'redeem' => '兌換',
        'adjust' => '調整',
    ],

    'columns' => [
        'created_at' => '日期',
        'type' => '類型',
        'points' => '點數',
        'reason' => '原因',
        'source' => '來源',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => '調整點數',
            'points_field' => '點數',
            'reason_field' => '原因',
        ],
        'redeem_reward' => [
            'label' => '兌換獎勵',
            'reward_field' => '獎勵',
        ],
    ],

    'notifications' => [
        'points_adjusted' => '點數已調整',
        'redeem_failed' => '無法兌換獎勵',
        'redeem_success' => '獎勵已兌換',
    ],

    'reward' => [
        'fields' => [
            'name' => '名稱',
            'description' => '描述',
            'points_cost' => '所需點數',
            'stock' => '庫存',
            'stock_helper' => '留空表示庫存不限。',
            'active' => '啟用',
        ],
        'stock_unlimited' => '不限',
        'model_label' => '忠誠度獎勵',
        'plural_model_label' => '忠誠度獎勵',
        'navigation_label' => '忠誠度獎勵',
    ],

];
