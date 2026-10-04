<?php

return [

    'relation_manager' => [
        'title' => 'Kanta-asiakkuus',
        'description' => ':balance pistettä · :lifetime pistettä yhteensä · :tier taso',
    ],

    'tier' => [
        'label' => 'Taso',
    ],

    'types' => [
        'earn' => 'Ansaittu',
        'redeem' => 'Käytetty',
        'adjust' => 'Korjaus',
    ],

    'columns' => [
        'created_at' => 'Päivämäärä',
        'type' => 'Tyyppi',
        'points' => 'Pisteet',
        'reason' => 'Syy',
        'source' => 'Lähde',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Muuta pisteitä',
            'points_field' => 'Pisteet',
            'reason_field' => 'Syy',
        ],
        'redeem_reward' => [
            'label' => 'Lunasta palkinto',
            'reward_field' => 'Palkinto',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Pisteitä muutettu',
        'redeem_failed' => 'Palkintoa ei voitu lunastaa',
        'redeem_success' => 'Palkinto lunastettu',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Nimi',
            'description' => 'Kuvaus',
            'points_cost' => 'Pistehinta',
            'stock' => 'Varasto',
            'stock_helper' => 'Jätä tyhjäksi rajoittamattomalle varastolle.',
            'active' => 'Aktiivinen',
        ],
        'stock_unlimited' => 'Rajoittamaton',
        'model_label' => 'Kanta-asiakaspalkinto',
        'plural_model_label' => 'Kanta-asiakaspalkinnot',
        'navigation_label' => 'Kanta-asiakaspalkinnot',
    ],

];
