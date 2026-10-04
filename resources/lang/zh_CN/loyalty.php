<?php

return [

    'relation_manager' => [
        'title' => '忠诚度',
        'description' => ':balance 积分 · :lifetime 累计积分 · :tier 等级',
    ],

    'tier' => [
        'label' => '等级',
    ],

    'types' => [
        'earn' => '获得',
        'redeem' => '兑换',
        'adjust' => '调整',
    ],

    'columns' => [
        'created_at' => '日期',
        'type' => '类型',
        'points' => '积分',
        'reason' => '原因',
        'source' => '来源',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => '调整积分',
            'points_field' => '积分',
            'reason_field' => '原因',
        ],
        'redeem_reward' => [
            'label' => '兑换奖励',
            'reward_field' => '奖励',
        ],
    ],

    'notifications' => [
        'points_adjusted' => '积分已调整',
        'redeem_failed' => '无法兑换奖励',
        'redeem_success' => '奖励已兑换',
    ],

    'reward' => [
        'fields' => [
            'name' => '名称',
            'description' => '描述',
            'points_cost' => '所需积分',
            'stock' => '库存',
            'stock_helper' => '留空表示库存不限。',
            'active' => '启用',
        ],
        'stock_unlimited' => '不限',
        'model_label' => '忠诚度奖励',
        'plural_model_label' => '忠诚度奖励',
        'navigation_label' => '忠诚度奖励',
    ],

];
