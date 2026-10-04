<?php

return [

    'relation_manager' => [
        'title' => 'သစ္စာရှိမှု',
        'description' => ':balance ပွိုင့် · :lifetime တစ်သက်တာပွိုင့် · :tier အဆင့်',
    ],

    'tier' => [
        'label' => 'အဆင့်',
    ],

    'types' => [
        'earn' => 'ရရှိငွေ',
        'redeem' => 'ရွေးယူခြင်း',
        'adjust' => 'ချိန်ညှိမှု',
    ],

    'columns' => [
        'created_at' => 'ရက်စွဲ',
        'type' => 'အမျိုးအစား',
        'points' => 'ပွိုင့်',
        'reason' => 'အကြောင်းရင်း',
        'source' => 'အရင်းအမြစ်',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'ပွိုင့်ချိန်ညှိရန်',
            'points_field' => 'ပွိုင့်',
            'reason_field' => 'အကြောင်းရင်း',
        ],
        'redeem_reward' => [
            'label' => 'ဆုလာဘ်ရွေးယူရန်',
            'reward_field' => 'ဆုလာဘ်',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'ပွိုင့်ချိန်ညှိပြီးပြီ',
        'redeem_failed' => 'ဆုလာဘ်ရွေးယူ၍မရပါ',
        'redeem_success' => 'ဆုလာဘ်ရွေးယူပြီးပြီ',
    ],

    'reward' => [
        'fields' => [
            'name' => 'အမည်',
            'description' => 'ဖော်ပြချက်',
            'points_cost' => 'ပွိုင့်ဖြင့်တန်ဖိုး',
            'stock' => 'စတော့',
            'stock_helper' => 'အကန့်အသတ်မရှိသိုလှောင်ရန် အလွတ်ထားပါ။',
            'active' => 'အသက်ဝင်',
        ],
        'stock_unlimited' => 'အကန့်အသတ်မရှိ',
        'model_label' => 'သစ္စာရှိမှုဆုလာဘ်',
        'plural_model_label' => 'သစ္စာရှိမှုဆုလာဘ်များ',
        'navigation_label' => 'သစ္စာရှိမှုဆုလာဘ်များ',
    ],

];
