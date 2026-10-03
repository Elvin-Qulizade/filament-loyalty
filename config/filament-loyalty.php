<?php

// config for ElvinQulizade/Loyalty
return [

    // Automatic earning rules. Each key is a model class whose `saved` event
    // is watched; `when` gates whether this save should award points at all,
    // `member` resolves the LoyaltyMember to credit, `points` computes how
    // many. See the README for a full example.
    'rules' => [
        // \App\Models\Order::class => [
        //     'member' => fn ($order) => $order->customer,
        //     'when'   => fn ($order) => $order->status === 'paid',
        //     'points' => fn ($order) => (int) floor($order->total),
        // ],
    ],

    // Tier name => the lifetime points threshold (inclusive) a member needs
    // to reach it. Must include a 0 threshold or loyaltyTier() falls back to
    // "bronze" for members below the lowest configured threshold.
    'tiers' => [
        'bronze' => 0,
        'silver' => 500,
        'gold' => 2000,
    ],

];
