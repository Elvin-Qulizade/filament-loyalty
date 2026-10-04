<?php

return [

    'relation_manager' => [
        'title' => 'Khách hàng thân thiết',
        'description' => ':balance điểm · :lifetime điểm trọn đời · :tier hạng',
    ],

    'tier' => [
        'label' => 'Hạng',
    ],

    'types' => [
        'earn' => 'Tích điểm',
        'redeem' => 'Đổi điểm',
        'adjust' => 'Điều chỉnh',
    ],

    'columns' => [
        'created_at' => 'Ngày',
        'type' => 'Loại',
        'points' => 'Điểm',
        'reason' => 'Lý do',
        'source' => 'Nguồn',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Điều chỉnh điểm',
            'points_field' => 'Điểm',
            'reason_field' => 'Lý do',
        ],
        'redeem_reward' => [
            'label' => 'Đổi phần thưởng',
            'reward_field' => 'Phần thưởng',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Đã điều chỉnh điểm',
        'redeem_failed' => 'Không thể đổi phần thưởng',
        'redeem_success' => 'Đã đổi phần thưởng',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Tên',
            'description' => 'Mô tả',
            'points_cost' => 'Giá bằng điểm',
            'stock' => 'Tồn kho',
            'stock_helper' => 'Để trống nếu không giới hạn tồn kho.',
            'active' => 'Hoạt động',
        ],
        'stock_unlimited' => 'Không giới hạn',
        'model_label' => 'Phần thưởng thân thiết',
        'plural_model_label' => 'Phần thưởng thân thiết',
        'navigation_label' => 'Phần thưởng thân thiết',
    ],

];
