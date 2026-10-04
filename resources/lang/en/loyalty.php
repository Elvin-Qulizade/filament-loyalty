<?php

return [

    'relation_manager' => [
        'title' => 'Loyalty',
        'description' => ':balance points · :lifetime lifetime · :tier tier',
    ],

    'tier' => [
        'label' => 'Tier',
    ],

    'types' => [
        'earn' => 'Earn',
        'redeem' => 'Redeem',
        'adjust' => 'Adjust',
    ],

    'columns' => [
        'created_at' => 'Date',
        'type' => 'Type',
        'points' => 'Points',
        'reason' => 'Reason',
        'source' => 'Source',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Adjust points',
            'points_field' => 'Points',
            'reason_field' => 'Reason',
        ],
        'redeem_reward' => [
            'label' => 'Redeem reward',
            'reward_field' => 'Reward',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Points adjusted',
        'redeem_failed' => 'Could not redeem reward',
        'redeem_success' => 'Reward redeemed',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Name',
            'description' => 'Description',
            'points_cost' => 'Points cost',
            'stock' => 'Stock',
            'stock_helper' => 'Leave empty for unlimited stock.',
            'active' => 'Active',
        ],
        'stock_unlimited' => 'Unlimited',
        'model_label' => 'Loyalty reward',
        'plural_model_label' => 'Loyalty rewards',
        'navigation_label' => 'Loyalty rewards',
    ],

];
