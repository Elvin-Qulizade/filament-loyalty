<?php

use ElvinQulizade\Loyalty\Filament\Resources\LoyaltyRewardResource\Pages\CreateLoyaltyReward;
use ElvinQulizade\Loyalty\Filament\Resources\LoyaltyRewardResource\Pages\ListLoyaltyRewards;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use Livewire\Livewire;

it('lists existing rewards', function () {
    LoyaltyReward::create(['name' => 'Mug', 'points_cost' => 60, 'active' => true]);

    Livewire::test(ListLoyaltyRewards::class)
        ->assertCanSeeTableRecords(LoyaltyReward::all());
});

it('creates a reward through the form', function () {
    Livewire::test(CreateLoyaltyReward::class)
        ->fillForm([
            'name' => 'Free shipping',
            'points_cost' => 100,
            'active' => true,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(LoyaltyReward::where('name', 'Free shipping')->exists())->toBeTrue();
});
