<?php

use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource\Pages\ListCustomers;
use Livewire\Livewire;

it('shows the gold tier badge on the customer list', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(2000);

    Livewire::test(ListCustomers::class)
        ->assertSuccessful()
        ->assertSee('Gold');
});

it('shows the bronze tier badge for a customer with no points', function () {
    Customer::create(['name' => 'Grace']);

    Livewire::test(ListCustomers::class)
        ->assertSuccessful()
        ->assertSee('Bronze');
});
