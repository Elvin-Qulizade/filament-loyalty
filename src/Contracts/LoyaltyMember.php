<?php

namespace ElvinQulizade\Loyalty\Contracts;

use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

interface LoyaltyMember
{
    public function loyaltyTransactions(): MorphMany;

    public function loyaltyBalance(): int;

    public function loyaltyLifetimePoints(): int;

    public function loyaltyTier(): string;

    public function earnLoyaltyPoints(int $points, ?string $reason = null, ?Model $source = null): LoyaltyTransaction;

    public function adjustLoyaltyPoints(int $points, string $reason, ?Model $by = null): LoyaltyTransaction;
}
