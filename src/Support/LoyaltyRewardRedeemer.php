<?php

namespace ElvinQulizade\Loyalty\Support;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use ElvinQulizade\Loyalty\Exceptions\RewardUnavailableException;
use ElvinQulizade\Loyalty\Models\LoyaltyReward;
use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use Illuminate\Support\Facades\DB;

class LoyaltyRewardRedeemer
{
    public static function redeem(LoyaltyMember $member, LoyaltyReward $reward): LoyaltyTransaction
    {
        return DB::transaction(function () use ($member, $reward) {
            /** @var LoyaltyReward $locked */
            $locked = LoyaltyReward::query()->lockForUpdate()->findOrFail($reward->getKey());

            if (! $locked->active) {
                throw RewardUnavailableException::inactive();
            }

            if ($locked->stock !== null && $locked->stock < 1) {
                throw RewardUnavailableException::outOfStock();
            }

            $transaction = $member->redeemLoyaltyPoints(
                $locked->points_cost,
                reason: "Redeemed: {$locked->name}",
                source: $locked,
            );

            if ($locked->stock !== null) {
                $locked->decrement('stock');
            }

            return $transaction;
        });
    }
}
