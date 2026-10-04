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
            TextInput::make('name')
                ->label(__('filament-loyalty::loyalty.reward.fields.name'))
                ->required(),
            Textarea::make('description')
                ->label(__('filament-loyalty::loyalty.reward.fields.description')),
            TextInput::make('points_cost')
                ->label(__('filament-loyalty::loyalty.reward.fields.points_cost'))
                ->numeric()
                ->required()
                ->minValue(0),
            TextInput::make('stock')
                ->label(__('filament-loyalty::loyalty.reward.fields.stock'))
                ->numeric()
                ->nullable()
                ->helperText(__('filament-loyalty::loyalty.reward.fields.stock_helper')),
            Toggle::make('active')
                ->label(__('filament-loyalty::loyalty.reward.fields.active'))
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->label(__('filament-loyalty::loyalty.reward.fields.name'))
                ->searchable(),
            TextColumn::make('points_cost')
                ->label(__('filament-loyalty::loyalty.reward.fields.points_cost'))
                ->sortable(),
            TextColumn::make('stock')
                ->label(__('filament-loyalty::loyalty.reward.fields.stock'))
                ->placeholder(__('filament-loyalty::loyalty.reward.stock_unlimited')),
            IconColumn::make('active')
                ->label(__('filament-loyalty::loyalty.reward.fields.active'))
                ->boolean(),
        ]);
    }

    public static function getModelLabel(): string
    {
        return __('filament-loyalty::loyalty.reward.model_label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-loyalty::loyalty.reward.plural_model_label');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-loyalty::loyalty.reward.navigation_label');
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
