<?php

use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use ElvinQulizade\Loyalty\Tests\Fixtures\Order;
use Illuminate\Database\Eloquent\Relations\Relation;

afterEach(function () {
    // Relation::morphMap() is a static registry on the Relation class itself,
    // not app state — Testbench's fresh app per test does not reset it, so a
    // test that sets one must clean up or it leaks into every later test.
    Relation::morphMap([], false);
});

it('awards points when the rule condition is met', function () {
    $customer = Customer::create(['name' => 'Ada']);

    Order::create(['customer_id' => $customer->id, 'status' => 'paid', 'total' => 120]);

    expect($customer->loyaltyBalance())->toBe(120);
});

it('does not award points when the rule condition is not met', function () {
    $customer = Customer::create(['name' => 'Ada']);

    Order::create(['customer_id' => $customer->id, 'status' => 'pending', 'total' => 120]);

    expect($customer->loyaltyBalance())->toBe(0);
});

it('does not double-award when the same order is saved again', function () {
    $customer = Customer::create(['name' => 'Ada']);

    $order = Order::create(['customer_id' => $customer->id, 'status' => 'paid', 'total' => 120]);
    $order->update(['status' => 'paid']); // e.g. an unrelated field edit re-saving the same row

    expect($customer->loyaltyBalance())->toBe(120);
    expect($customer->loyaltyTransactions()->where('type', 'earn')->count())->toBe(1);
});

it('does nothing when the order has no customer', function () {
    Order::create(['customer_id' => null, 'status' => 'paid', 'total' => 120]);

    expect(LoyaltyTransaction::count())->toBe(0);
});

it('does not double-award when a morph map is active and the order is saved again', function () {
    Relation::morphMap([
        'order' => Order::class,
        'customer' => Customer::class,
    ]);

    $customer = Customer::create(['name' => 'Ada']);

    $order = Order::create(['customer_id' => $customer->id, 'status' => 'paid', 'total' => 120]);
    $order->update(['status' => 'paid']);

    expect($customer->loyaltyBalance())->toBe(120);
    expect($customer->loyaltyTransactions()->where('type', 'earn')->count())->toBe(1);
});
