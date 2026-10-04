<?php

return [

    'relation_manager' => [
        'title' => 'Πιστότητα',
        'description' => ':balance πόντους · :lifetime πόντους συνολικά · :tier επίπεδο',
    ],

    'tier' => [
        'label' => 'Επίπεδο',
    ],

    'types' => [
        'earn' => 'Κέρδος',
        'redeem' => 'Εξαργύρωση',
        'adjust' => 'Προσαρμογή',
    ],

    'columns' => [
        'created_at' => 'Ημερομηνία',
        'type' => 'Τύπος',
        'points' => 'Πόντοι',
        'reason' => 'Αιτία',
        'source' => 'Πηγή',
    ],

    'actions' => [
        'adjust_points' => [
            'label' => 'Προσαρμογή πόντων',
            'points_field' => 'Πόντοι',
            'reason_field' => 'Αιτία',
        ],
        'redeem_reward' => [
            'label' => 'Εξαργύρωση επάθλου',
            'reward_field' => 'Έπαθλο',
        ],
    ],

    'notifications' => [
        'points_adjusted' => 'Οι πόντοι προσαρμόστηκαν',
        'redeem_failed' => 'Δεν ήταν δυνατή η εξαργύρωση του επάθλου',
        'redeem_success' => 'Το έπαθλο εξαργυρώθηκε',
    ],

    'reward' => [
        'fields' => [
            'name' => 'Όνομα',
            'description' => 'Περιγραφή',
            'points_cost' => 'Κόστος σε πόντους',
            'stock' => 'Απόθεμα',
            'stock_helper' => 'Αφήστε κενό για απεριόριστο απόθεμα.',
            'active' => 'Ενεργό',
        ],
        'stock_unlimited' => 'Απεριόριστο',
        'model_label' => 'Έπαθλο πιστότητας',
        'plural_model_label' => 'Έπαθλα πιστότητας',
        'navigation_label' => 'Έπαθλα πιστότητας',
    ],

];
