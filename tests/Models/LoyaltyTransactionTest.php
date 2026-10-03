<?php

use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;

it('stores a ledger row with the expected columns', function () {
    $transaction = LoyaltyTransaction::create([
        'member_type' => 'App\\Models\\Customer',
        'member_id' => 1,
        'type' => 'earn',
        'points' => 100,
        'reason' => 'Order #42',
        'source_type' => 'App\\Models\\Order',
        'source_id' => 42,
    ]);

    expect($transaction->fresh())
        ->type->toBe('earn')
        ->points->toBe(100)
        ->reason->toBe('Order #42');
});

it('has no updated_at column', function () {
    $transaction = LoyaltyTransaction::create([
        'member_type' => 'App\\Models\\Customer',
        'member_id' => 1,
        'type' => 'earn',
        'points' => 50,
    ]);

    expect($transaction->getAttributes())->not->toHaveKey('updated_at');
});
