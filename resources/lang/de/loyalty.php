<?php

return [

    'relation_manager' => [
        'title' => 'Treue',
        'description' => ':balance Punkte · :lifetime Punkte insgesamt · :tier Stufe',
    ],

    'tier' => [
        'label' => 'Stufe',
    ],

    'types' => [
        'earn' => 'Gutschrift',
        'redeem' => 'Einlösung',
        'adjust' => 'Anpassung',
    ],

    'columns' => [
        'created_at' => 'Datum',
        'type' => 'Typ',
        'points' => 'Punkte',
        'reason' => 'Grund',
        'source' => 'Quelle',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Punkte anpassen',
            'points_field' => 'Punkte',
            'reason_field' => 'Grund',
        ],
        'redeem_reward' => [
            'label' => 'Prämie einlösen',
            'reward_field' => 'Prämie',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Punkte angepasst',
        'redeem_failed' => 'Prämie konnte nicht eingelöst werden',
        'redeem_success' => 'Prämie eingelöst',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Name',
            'description' => 'Beschreibung',
            'points_cost' => 'Punktekosten',
            'stock' => 'Bestand',
            'stock_helper' => 'Für unbegrenzten Bestand leer lassen.',
            'active' => 'Aktiv',
        ],
        'stock_unlimited' => 'Unbegrenzt',
        'model_label' => 'Treueprämie',
        'plural_model_label' => 'Treueprämien',
        'navigation_label' => 'Treueprämien',
    ],

];
