<?php

namespace ElvinQulizade\Loyalty\Filament\Actions;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use ElvinQulizade\Loyalty\Exceptions\InsufficientPointsException;
use ElvinQulizade\Loyalty\Exceptions\RewardUnavailableException;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use ElvinQulizade\Loyalty\Support\LoyaltyRewardRedeemer;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Illuminate\Database\Eloquent\Model;

class RedeemLoyaltyRewardAction
{
    public static function make(string $name = 'redeemReward'): Action
    {
        return Action::make($name)
            ->label('Redeem reward')
            ->icon('heroicon-o-gift')
            ->schema([
                Select::make('reward_id')
                    ->label('Reward')
                    ->options(function (RelationManager $livewire): array {
                        /** @var LoyaltyMember&Model $member */
                        $member = $livewire->getOwnerRecord();

                        return LoyaltyReward::query()
                            ->where('active', true)
                            ->where(fn ($query) => $query->whereNull('stock')->orWhere('stock', '>', 0))
                            ->where('points_cost', '<=', $member->loyaltyBalance())
                            ->pluck('name', 'id')
                            ->all();
                    })
                    ->required(),
            ])
            ->action(function (array $data, RelationManager $livewire): void {
                /** @var LoyaltyMember&Model $member */
                $member = $livewire->getOwnerRecord();
                $reward = LoyaltyReward::findOrFail($data['reward_id']);

                try {
                    LoyaltyRewardRedeemer::redeem($member, $reward);
                } catch (InsufficientPointsException | RewardUnavailableException $exception) {
                    Notification::make()
                        ->title('Could not redeem reward')
                        ->body($exception->getMessage())
                        ->danger()
                        ->send();

                    return;
                }

                Notification::make()
                    ->title('Reward redeemed')
                    ->success()
                    ->send();
            });
    }
}
