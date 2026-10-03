<?php

use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use ElvinQulizade\Loyalty\Tests\Fixtures\Order;

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
