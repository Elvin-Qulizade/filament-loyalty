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
        return __('filament-loyalty::loyalty.relation_manager.title');
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
            ->description(fn (): string => __('filament-loyalty::loyalty.relation_manager.description', [
                'balance' => $this->loyaltyMember()->loyaltyBalance(),
                'lifetime' => $this->loyaltyMember()->loyaltyLifetimePoints(),
                'tier' => ucfirst($this->loyaltyMember()->loyaltyTier()),
            ]))
            ->headerActions([
                Action::make('adjustPoints')
                    ->label(__('filament-loyalty::loyalty.actions.adjust_points.label'))
                    ->icon('heroicon-o-plus-circle')
                    ->schema([
                        TextInput::make('points')
                            ->label(__('filament-loyalty::loyalty.actions.adjust_points.points_field'))
                            ->numeric()
                            ->required(),
                        TextInput::make('reason')
                            ->label(__('filament-loyalty::loyalty.actions.adjust_points.reason_field'))
                            ->required(),
                    ])
                    ->action(function (array $data): void {
                        $this->loyaltyMember()->adjustLoyaltyPoints(
                            (int) $data['points'],
                            $data['reason'],
                            auth()->user(),
                        );

                        Notification::make()
                            ->title(__('filament-loyalty::loyalty.notifications.points_adjusted'))
                            ->success()
                            ->send();
                    }),

                RedeemLoyaltyRewardAction::make(),
            ])
            ->columns([
                TextColumn::make('created_at')
                    ->label(__('filament-loyalty::loyalty.columns.created_at'))
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('type')
                    ->label(__('filament-loyalty::loyalty.columns.type'))
                    ->formatStateUsing(fn (string $state): string => __('filament-loyalty::loyalty.types.' . $state))
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'earn' => 'success',
                        'redeem' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('points')
                    ->label(__('filament-loyalty::loyalty.columns.points'))
                    ->formatStateUsing(fn (int $state): string => ($state > 0 ? '+' : '') . $state),

                TextColumn::make('reason')
                    ->label(__('filament-loyalty::loyalty.columns.reason'))
                    ->limit(50),

                TextColumn::make('source_id')
                    ->label(__('filament-loyalty::loyalty.columns.source'))
                    ->formatStateUsing(fn ($record): ?string => $record->source_type
                        ? class_basename($record->source_type) . ' #' . $record->source_id
                        : null)
                    ->placeholder('—'),
            ]);
    }
}
