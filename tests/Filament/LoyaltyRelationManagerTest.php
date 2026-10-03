<?php

use ElvinQulizade\Loyalty\Filament\RelationManagers\LoyaltyRelationManager;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource\Pages\EditCustomer;
use Livewire\Livewire;

it('renders the ledger and the current tier', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(2000, reason: 'Signup bonus');

    Livewire::test(LoyaltyRelationManager::class, [
        'ownerRecord' => $customer,
        'pageClass' => EditCustomer::class,
    ])
        ->assertSuccessful()
        ->assertSee('Gold');
});

it('adjusts points through the header action and requires a reason', function () {
    $customer = Customer::create(['name' => 'Ada']);

    Livewire::test(LoyaltyRelationManager::class, [
        'ownerRecord' => $customer,
        'pageClass' => EditCustomer::class,
    ])
        ->callTableAction('adjustPoints', data: ['points' => 25, 'reason' => 'Goodwill'])
        ->assertHasNoTableActionErrors();

    expect($customer->loyaltyBalance())->toBe(25);
});

it('redeems a reward through the header action', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(100);

    $reward = LoyaltyReward::create(['name' => 'Mug', 'points_cost' => 60, 'stock' => 1, 'active' => true]);

    Livewire::test(LoyaltyRelationManager::class, [
        'ownerRecord' => $customer,
        'pageClass' => EditCustomer::class,
    ])
        ->callTableAction('redeemReward', data: ['reward_id' => $reward->id])
        ->assertHasNoTableActionErrors();

    expect($customer->loyaltyBalance())->toBe(40);
    expect($reward->fresh()->stock)->toBe(0);
});
