<?php

return [

    'relation_manager' => [
        'title' => 'נאמנות',
        'description' => ':balance נקודות · :lifetime נקודות סה"כ · :tier דרגה',
    ],

    'tier' => [
        'label' => 'דרגה',
    ],

    'types' => [
        'earn' => 'זיכוי',
        'redeem' => 'מימוש',
        'adjust' => 'התאמה',
    ],

    'columns' => [
        'created_at' => 'תאריך',
        'type' => 'סוג',
        'points' => 'נקודות',
        'reason' => 'סיבה',
        'source' => 'מקור',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'התאמת נקודות',
            'points_field' => 'נקודות',
            'reason_field' => 'סיבה',
        ],
        'redeem_reward' => [
            'label' => 'מימוש פרס',
            'reward_field' => 'פרס',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'הנקודות הותאמו',
        'redeem_failed' => 'לא ניתן היה לממש את הפרס',
        'redeem_success' => 'הפרס מומש',
    ],

    'reward' => [
        'fields' => [
            'name' => 'שם',
            'description' => 'תיאור',
            'points_cost' => 'עלות בנקודות',
            'stock' => 'מלאי',
            'stock_helper' => 'השאר ריק למלאי בלתי מוגבל.',
            'active' => 'פעיל',
        ],
        'stock_unlimited' => 'בלתי מוגבל',
        'model_label' => 'פרס נאמנות',
        'plural_model_label' => 'פרסי נאמנות',
        'navigation_label' => 'פרסי נאמנות',
    ],

];
