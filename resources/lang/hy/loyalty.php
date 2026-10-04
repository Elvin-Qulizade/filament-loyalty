<?php

return [

    'relation_manager' => [
        'title' => 'Հավատարմություն',
        'description' => ':balance միավոր · :lifetime կյանքի միավոր · :tier մակարդակ',
    ],

    'tier' => [
        'label' => 'Մակարդակ',
    ],

    'types' => [
        'earn' => 'Վաստակած',
        'redeem' => 'Օգտագործված',
        'adjust' => 'Ճշգրտում',
    ],

    'columns' => [
        'created_at' => 'Ամսաթիվ',
        'type' => 'Տեսակ',
        'points' => 'Միավոր',
        'reason' => 'Պատճառ',
        'source' => 'Աղբյուր',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Ճշգրտել միավորները',
            'points_field' => 'Միավոր',
            'reason_field' => 'Պատճառ',
        ],
        'redeem_reward' => [
            'label' => 'Օգտագործել պարգևը',
            'reward_field' => 'Պարգև',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Միավորները ճշգրտվեցին',
        'redeem_failed' => 'Պարգևը հնարավոր չեղավ օգտագործել',
        'redeem_success' => 'Պարգևն օգտագործվեց',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Անուն',
            'description' => 'Նկարագրություն',
            'points_cost' => 'Արժեքը միավորով',
            'stock' => 'Պաշար',
            'stock_helper' => 'Անսահմանափակ պաշարի համար թողեք դատարկ։',
            'active' => 'Ակտիվ',
        ],
        'stock_unlimited' => 'Անսահմանափակ',
        'model_label' => 'Հավատարմության պարգև',
        'plural_model_label' => 'Հավատարմության պարգևներ',
        'navigation_label' => 'Հավատարմության պարգևներ',
    ],

];
