<?php

return [

    'relation_manager' => [
        'title' => 'สะสมแต้ม',
        'description' => ':balance คะแนน · :lifetime คะแนนสะสมตลอดอายุ · :tier ระดับ',
    ],

    'tier' => [
        'label' => 'ระดับ',
    ],

    'types' => [
        'earn' => 'ได้รับ',
        'redeem' => 'แลกใช้',
        'adjust' => 'ปรับปรุง',
    ],

    'columns' => [
        'created_at' => 'วันที่',
        'type' => 'ประเภท',
        'points' => 'คะแนน',
        'reason' => 'เหตุผล',
        'source' => 'แหล่งที่มา',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ปรับคะแนน',
            'points_field' => 'คะแนน',
            'reason_field' => 'เหตุผล',
        ],
        'redeem_reward' => [
            'label' => 'แลกรางวัล',
            'reward_field' => 'รางวัล',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ปรับคะแนนแล้ว',
        'redeem_failed' => 'ไม่สามารถแลกรางวัลได้',
        'redeem_success' => 'แลกรางวัลสำเร็จ',
    ],

    'reward' => [
        'fields' => [
            'name' => 'ชื่อ',
            'description' => 'คำอธิบาย',
            'points_cost' => 'ราคาเป็นคะแนน',
            'stock' => 'สต็อก',
            'stock_helper' => 'เว้นว่างไว้สำหรับสต็อกไม่จำกัด',
            'active' => 'เปิดใช้งาน',
        ],
        'stock_unlimited' => 'ไม่จำกัด',
        'model_label' => 'รางวัลสะสมแต้ม',
        'plural_model_label' => 'รางวัลสะสมแต้ม',
        'navigation_label' => 'รางวัลสะสมแต้ม',
    ],

];
