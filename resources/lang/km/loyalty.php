<?php

return [

    'relation_manager' => [
        'title' => 'ភាពស្មោះត្រង់',
        'description' => ':balance ពិន្ទុ · :lifetime ពិន្ទុសរុបពេញមួយជីវិត · :tier ឋានៈ',
    ],

    'tier' => [
        'label' => 'ឋានៈ',
    ],

    'types' => [
        'earn' => 'ទទួលបាន',
        'redeem' => 'បានប្តូរ',
        'adjust' => 'កែតម្រូវ',
    ],

    'columns' => [
        'created_at' => 'កាលបរិច្ឆេទ',
        'type' => 'ប្រភេទ',
        'points' => 'ពិន្ទុ',
        'reason' => 'មូលហេតុ',
        'source' => 'ប្រភព',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'កែតម្រូវពិន្ទុ',
            'points_field' => 'ពិន្ទុ',
            'reason_field' => 'មូលហេតុ',
        ],
        'redeem_reward' => [
            'label' => 'ប្តូរយករង្វាន់',
            'reward_field' => 'រង្វាន់',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ពិន្ទុត្រូវបានកែតម្រូវ',
        'redeem_failed' => 'មិនអាចប្តូររង្វាន់បានទេ',
        'redeem_success' => 'បានប្តូររង្វាន់',
    ],

    'reward' => [
        'fields' => [
            'name' => 'ឈ្មោះ',
            'description' => 'ការពិពណ៌នា',
            'points_cost' => 'តម្លៃគិតជាពិន្ទុ',
            'stock' => 'ស្តុក',
            'stock_helper' => 'ទុកទទេសម្រាប់ស្តុកគ្មានដែនកំណត់។',
            'active' => 'សកម្ម',
        ],
        'stock_unlimited' => 'គ្មានដែនកំណត់',
        'model_label' => 'រង្វាន់ភាពស្មោះត្រង់',
        'plural_model_label' => 'រង្វាន់ភាពស្មោះត្រង់',
        'navigation_label' => 'រង្វាន់ភាពស្មោះត្រង់',
    ],

];
