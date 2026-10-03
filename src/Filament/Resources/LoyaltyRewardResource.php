<?php

namespace ElvinQulizade\Loyalty\Filament\Resources;

use ElvinQulizade\Loyalty\Filament\Resources\LoyaltyRewardResource\Pages;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LoyaltyRewardResource extends Resource
{
    protected static ?string $model = LoyaltyReward::class;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            Textarea::make('description'),
            TextInput::make('points_cost')->numeric()->required()->minValue(0),
            TextInput::make('stock')->numeric()->nullable()->helperText('Leave empty for unlimited stock.'),
            Toggle::make('active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('points_cost')->sortable(),
            TextColumn::make('stock')->placeholder('Unlimited'),
            IconColumn::make('active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoyaltyRewards::route('/'),
            'create' => Pages\CreateLoyaltyReward::route('/create'),
            'edit' => Pages\EditLoyaltyReward::route('/{record}/edit'),
        ];
    }
}
