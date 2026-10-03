<?php

use ElvinQulizade\Loyalty\Exceptions\InsufficientPointsException;
use ElvinQulizade\Loyalty\Exceptions\RewardUnavailableException;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use ElvinQulizade\Loyalty\Support\LoyaltyRewardRedeemer;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;

it('redeems a reward and decrements limited stock', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(100);

    $reward = LoyaltyReward::create(['name' => 'Mug', 'points_cost' => 60, 'stock' => 3, 'active' => true]);

    LoyaltyRewardRedeemer::redeem($customer, $reward);

    expect($customer->loyaltyBalance())->toBe(40);
    expect($reward->fresh()->stock)->toBe(2);
});

it('redeems a reward with unlimited stock without touching the stock column', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(100);

    $reward = LoyaltyReward::create(['name' => 'Shoutout', 'points_cost' => 10, 'stock' => null, 'active' => true]);

    LoyaltyRewardRedeemer::redeem($customer, $reward);

    expect($reward->fresh()->stock)->toBeNull();
});

it('redeems a free (zero-cost) reward without error', function () {
    $customer = Customer::create(['name' => 'Ada']);

    $reward = LoyaltyReward::create(['name' => 'Thank you note', 'points_cost' => 0, 'stock' => null, 'active' => true]);

    LoyaltyRewardRedeemer::redeem($customer, $reward);

    expect($customer->loyaltyBalance())->toBe(0);
});

it('blocks redeeming an inactive reward', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(100);

    $reward = LoyaltyReward::create(['name' => 'Retired perk', 'points_cost' => 10, 'active' => false]);

    expect(fn () => LoyaltyRewardRedeemer::redeem($customer, $reward))
        ->toThrow(RewardUnavailableException::class);

    expect($customer->loyaltyBalance())->toBe(100);
});

it('blocks redeeming when insufficient points', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(5);

    $reward = LoyaltyReward::create(['name' => 'Mug', 'points_cost' => 60, 'active' => true]);

    expect(fn () => LoyaltyRewardRedeemer::redeem($customer, $reward))
        ->toThrow(InsufficientPointsException::class);
});

it('blocks the second redemption of a reward that only had one in stock', function () {
    $first = Customer::create(['name' => 'Ada']);
    $first->earnLoyaltyPoints(100);

    $second = Customer::create(['name' => 'Grace']);
    $second->earnLoyaltyPoints(100);

    $reward = LoyaltyReward::create(['name' => 'Limited mug', 'points_cost' => 10, 'stock' => 1, 'active' => true]);

    LoyaltyRewardRedeemer::redeem($first, $reward);

    expect(fn () => LoyaltyRewardRedeemer::redeem($second, $reward))
        ->toThrow(RewardUnavailableException::class);

    expect($reward->fresh()->stock)->toBe(0);
    expect($second->loyaltyBalance())->toBe(100); // untouched — the second redemption never happened
});
