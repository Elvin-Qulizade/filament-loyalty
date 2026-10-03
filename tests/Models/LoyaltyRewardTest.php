<?php

use ElvinQulizade\Loyalty\Models\LoyaltyReward;

it('stores a reward and casts active to a boolean', function () {
    $reward = LoyaltyReward::create([
        'name' => 'Free shipping',
        'description' => 'Waive shipping on the next order',
        'points_cost' => 200,
        'stock' => 10,
        'active' => 1,
    ]);

    expect($reward->fresh()->active)->toBeTrue();
    expect($reward->stock)->toBe(10);
});

it('allows a null stock to mean unlimited', function () {
    $reward = LoyaltyReward::create([
        'name' => 'Newsletter shoutout',
        'points_cost' => 10,
        'stock' => null,
        'active' => true,
    ]);

    expect($reward->fresh()->stock)->toBeNull();
});
