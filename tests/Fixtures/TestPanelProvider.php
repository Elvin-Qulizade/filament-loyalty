<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures;

use ElvinQulizade\Loyalty\Filament\Resources\LoyaltyRewardResource;
use Filament\Panel;
use Filament\PanelProvider;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->default()
            ->resources([
                LoyaltyRewardResource::class,
            ]);
    }
}
