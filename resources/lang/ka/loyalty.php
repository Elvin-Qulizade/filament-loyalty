<?php

return [

    'relation_manager' => [
        'title' => 'ლოიალობა',
        'description' => ':balance ქულა · :lifetime ქულა სულ · :tier დონე',
    ],

    'tier' => [
        'label' => 'დონე',
    ],

    'types' => [
        'earn' => 'მიღებული',
        'redeem' => 'გამოყენებული',
        'adjust' => 'კორექტირება',
    ],

    'columns' => [
        'created_at' => 'თარიღი',
        'type' => 'ტიპი',
        'points' => 'ქულა',
        'reason' => 'მიზეზი',
        'source' => 'წყარო',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ქულების კორექტირება',
            'points_field' => 'ქულა',
            'reason_field' => 'მიზეზი',
        ],
        'redeem_reward' => [
            'label' => 'ჯილდოს გამოყენება',
            'reward_field' => 'ჯილდო',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ქულები დაკორექტირდა',
        'redeem_failed' => 'ჯილდოს გამოყენება ვერ მოხერხდა',
        'redeem_success' => 'ჯილდო გამოყენებულია',
    ],

    'reward' => [
        'fields' => [
            'name' => 'სახელი',
            'description' => 'აღწერა',
            'points_cost' => 'ფასი ქულებში',
            'stock' => 'მარაგი',
            'stock_helper' => 'დატოვეთ ცარიელი შეუზღუდავი მარაგისთვის.',
            'active' => 'აქტიური',
        ],
        'stock_unlimited' => 'შეუზღუდავი',
        'model_label' => 'ლოიალობის ჯილდო',
        'plural_model_label' => 'ლოიალობის ჯილდოები',
        'navigation_label' => 'ლოიალობის ჯილდოები',
    ],

];
