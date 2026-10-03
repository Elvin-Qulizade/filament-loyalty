<?php

namespace ElvinQulizade\Loyalty\Filament\RelationManagers;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use ElvinQulizade\Loyalty\Filament\Actions\RedeemLoyaltyRewardAction;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class LoyaltyRelationManager extends RelationManager
{
    protected static string $relationship = 'loyaltyTransactions';

    protected static string | \BackedEnum | null $icon = 'heroicon-o-star';

    public static function getTitle($ownerRecord, string $pageClass): string
    {
        return 'Loyalty';
    }

    /**
     * @return LoyaltyMember&Model
     */
    protected function loyaltyMember(): Model
    {
        /** @var LoyaltyMember&Model $member */
        $member = $this->getOwnerRecord();

        return $member;
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('reason')
            ->defaultSort('id', 'desc')
            ->description(fn (): string => sprintf(
                '%d points · %d lifetime · %s tier',
                $this->loyaltyMember()->loyaltyBalance(),
                $this->loyaltyMember()->loyaltyLifetimePoints(),
                ucfirst($this->loyaltyMember()->loyaltyTier()),
            ))
            ->headerActions([
                Action::make('adjustPoints')
                    ->label('Adjust points')
                    ->icon('heroicon-o-plus-circle')
                    ->schema([
                        TextInput::make('points')->numeric()->required(),
                        TextInput::make('reason')->required(),
                    ])
                    ->action(function (array $data): void {
                        $this->loyaltyMember()->adjustLoyaltyPoints(
                            (int) $data['points'],
                            $data['reason'],
                            auth()->user(),
                        );

                        Notification::make()
                            ->title('Points adjusted')
                            ->success()
                            ->send();
                    }),

                RedeemLoyaltyRewardAction::make(),
            ])
            ->columns([
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'earn' => 'success',
                        'redeem' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('points')
                    ->formatStateUsing(fn (int $state): string => ($state > 0 ? '+' : '') . $state),

                TextColumn::make('reason')
                    ->limit(50),
            ]);
    }
}
