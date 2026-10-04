<?php

return [

    'relation_manager' => [
        'title' => 'Loyaliteit',
        'description' => ':balance punten · :lifetime punten totaal · :tier niveau',
    ],

    'tier' => [
        'label' => 'Niveau',
    ],

    'types' => [
        'earn' => 'Verdiend',
        'redeem' => 'Besteed',
        'adjust' => 'Aanpassing',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Type',
        'points' => 'Punten',
        'reason' => 'Reden',
        'source' => 'Bron',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Punten aanpassen',
            'points_field' => 'Punten',
            'reason_field' => 'Reden',
        ],
        'redeem_reward' => [
            'label' => 'Beloning inwisselen',
            'reward_field' => 'Beloning',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punten aangepast',
        'redeem_failed' => 'Beloning kon niet worden ingewisseld',
        'redeem_success' => 'Beloning ingewisseld',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Naam',
            'description' => 'Omschrijving',
            'points_cost' => 'Puntenkosten',
            'stock' => 'Voorraad',
            'stock_helper' => 'Leeg laten voor onbeperkte voorraad.',
            'active' => 'Actief',
        ],
        'stock_unlimited' => 'Onbeperkt',
        'model_label' => 'Loyaliteitsbeloning',
        'plural_model_label' => 'Loyaliteitsbeloningen',
        'navigation_label' => 'Loyaliteitsbeloningen',
    ],

];
