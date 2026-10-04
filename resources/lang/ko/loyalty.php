<?php

return [

    'relation_manager' => [
        'title' => '로열티',
        'description' => ':balance 포인트 · :lifetime 누적 포인트 · :tier 등급',
    ],

    'tier' => [
        'label' => '등급',
    ],

    'types' => [
        'earn' => '적립',
        'redeem' => '사용',
        'adjust' => '조정',
    ],

    'columns' => [
        'created_at' => '날짜',
        'type' => '유형',
        'points' => '포인트',
        'reason' => '사유',
        'source' => '출처',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => '포인트 조정',
            'points_field' => '포인트',
            'reason_field' => '사유',
        ],
        'redeem_reward' => [
            'label' => '리워드 사용',
            'reward_field' => '리워드',
        ],
    ],

    'notifications' => [
        'points_adjusted' => '포인트가 조정되었습니다',
        'redeem_failed' => '리워드를 사용할 수 없습니다',
        'redeem_success' => '리워드를 사용했습니다',
    ],

    'reward' => [
        'fields' => [
            'name' => '이름',
            'description' => '설명',
            'points_cost' => '필요 포인트',
            'stock' => '재고',
            'stock_helper' => '재고를 무제한으로 하려면 비워 두세요.',
            'active' => '활성',
        ],
        'stock_unlimited' => '무제한',
        'model_label' => '로열티 리워드',
        'plural_model_label' => '로열티 리워드',
        'navigation_label' => '로열티 리워드',
    ],

];
