<?php

use ElvinQulizade\Loyalty\Events\TierChanged;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use Illuminate\Support\Facades\Event;

it('starts at zero balance, lifetime points and the lowest tier', function () {
    $customer = Customer::create(['name' => 'Ada']);

    expect($customer->loyaltyBalance())->toBe(0);
    expect($customer->loyaltyLifetimePoints())->toBe(0);
    expect($customer->loyaltyTier())->toBe('bronze');
});

it('increases balance and lifetime points on earn', function () {
    $customer = Customer::create(['name' => 'Ada']);

    $customer->earnLoyaltyPoints(150, reason: 'Welcome bonus');

    expect($customer->loyaltyBalance())->toBe(150);
    expect($customer->loyaltyLifetimePoints())->toBe(150);
});

it('reaches a tier exactly at its threshold, not past it', function () {
    $customer = Customer::create(['name' => 'Ada']);

    $customer->earnLoyaltyPoints(499);
    expect($customer->loyaltyTier())->toBe('bronze');

    $customer->earnLoyaltyPoints(1); // now exactly 500
    expect($customer->loyaltyTier())->toBe('silver');

    $customer->earnLoyaltyPoints(1499); // now exactly 1999, still under gold's 2000
    expect($customer->loyaltyTier())->toBe('silver');

    $customer->earnLoyaltyPoints(1); // now exactly 2000
    expect($customer->loyaltyTier())->toBe('gold');
});

it('records an earn transaction with the source model attached', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $source = Customer::create(['name' => 'placeholder-source']); // any Model works as a source

    $transaction = $customer->earnLoyaltyPoints(10, source: $source);

    expect($transaction->source_type)->toBe(Customer::class);
    expect($transaction->source_id)->toBe($source->id);
});

it('requires a reason for a manual adjustment', function () {
    $customer = Customer::create(['name' => 'Ada']);

    $customer->adjustLoyaltyPoints(20, 'Goodwill gesture');

    expect($customer->loyaltyBalance())->toBe(20);

    expect(fn () => $customer->adjustLoyaltyPoints(-5, ''))
        ->toThrow(InvalidArgumentException::class);
});

it('allows a negative adjustment below zero balance as an intentional admin override', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(10);

    $customer->adjustLoyaltyPoints(-30, 'Correcting a fraud refund');

    expect($customer->loyaltyBalance())->toBe(-20);
});

it('never lowers lifetime points or tier after a negative adjustment', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(2000); // gold

    $customer->adjustLoyaltyPoints(-1900, 'Correcting a duplicate award');

    expect($customer->loyaltyTier())->toBe('gold');
    expect($customer->loyaltyLifetimePoints())->toBe(2000);
});

it('dispatches TierChanged when an earn crosses a tier threshold', function () {
    Event::fake([TierChanged::class]);

    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(500); // bronze -> silver

    Event::assertDispatched(TierChanged::class, fn (TierChanged $event): bool => $event->member->is($customer)
        && $event->previousTier === 'bronze'
        && $event->newTier === 'silver');
});

it('does not dispatch TierChanged when the tier does not change', function () {
    Event::fake([TierChanged::class]);

    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(100); // stays bronze

    Event::assertNotDispatched(TierChanged::class);
});
