<?php

namespace ElvinQulizade\Loyalty\Filament;

use Filament\Tables\Columns\TextColumn;

class LoyaltyTierColumn
{
    public static function make(string $name = 'tier'): TextColumn
    {
        return TextColumn::make($name)
            ->label(__('filament-loyalty::loyalty.tier.label'))
            ->state(fn ($record) => $record->loyaltyTier())
            ->formatStateUsing(fn (string $state): string => ucfirst($state))
            ->badge()
            ->color(fn (string $state): string => match ($state) {
                'gold' => 'warning',
                'silver' => 'gray',
                default => 'success',
            });
    }
}
