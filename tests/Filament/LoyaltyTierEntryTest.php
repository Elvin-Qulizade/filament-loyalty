<?php

use ElvinQulizade\Loyalty\Filament\LoyaltyTierEntry;
use ElvinQulizade\Loyalty\Tests\Fixtures\Customer;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

it('builds a TextEntry that reports the member tier', function () {
    $customer = Customer::create(['name' => 'Ada']);
    $customer->earnLoyaltyPoints(2000);

    $entry = LoyaltyTierEntry::make();

    expect($entry)->toBeInstanceOf(TextEntry::class);

    $schema = Schema::make()->components([$entry])->record($customer);
    $schema->getComponents();

    expect($entry->formatState($entry->getState()))->toBe('Gold');
});
