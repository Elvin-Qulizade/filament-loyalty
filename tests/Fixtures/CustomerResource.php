<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures;

use ElvinQulizade\Loyalty\Filament\LoyaltyTierColumn;
use ElvinQulizade\Loyalty\Filament\RelationManagers\LoyaltyRelationManager;
use ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource\Pages;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name'),
            LoyaltyTierColumn::make(),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            LoyaltyRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
