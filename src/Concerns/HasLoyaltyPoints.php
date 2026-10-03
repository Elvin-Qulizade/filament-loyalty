<?php

namespace ElvinQulizade\Loyalty\Concerns;

use ElvinQulizade\Loyalty\Events\TierChanged;
use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use InvalidArgumentException;

trait HasLoyaltyPoints
{
    public function loyaltyTransactions(): MorphMany
    {
        return $this->morphMany(LoyaltyTransaction::class, 'member')->latest('id');
    }

    public function loyaltyBalance(): int
    {
        return (int) $this->loyaltyTransactions()->sum('points');
    }

    public function loyaltyLifetimePoints(): int
    {
        return (int) $this->loyaltyTransactions()->where('points', '>', 0)->sum('points');
    }

    public function loyaltyTier(): string
    {
        $lifetime = $this->loyaltyLifetimePoints();

        $tiers = (array) config('filament-loyalty.tiers', []);

        arsort($tiers);

        foreach ($tiers as $tier => $threshold) {
            if ($lifetime >= $threshold) {
                return (string) $tier;
            }
        }

        return 'bronze';
    }

    public function earnLoyaltyPoints(int $points, ?string $reason = null, ?Model $source = null): LoyaltyTransaction
    {
        $previousTier = $this->loyaltyTier();

        $transaction = $this->loyaltyTransactions()->create([
            'type' => 'earn',
            'points' => abs($points),
            'reason' => $reason,
            'source_type' => $source?->getMorphClass(),
            'source_id' => $source?->getKey(),
        ]);

        $this->dispatchLoyaltyTierChangeIfAny($previousTier);

        return $transaction;
    }

    public function adjustLoyaltyPoints(int $points, string $reason, ?Model $by = null): LoyaltyTransaction
    {
        if (trim($reason) === '') {
            throw new InvalidArgumentException('A reason is required for a manual loyalty points adjustment.');
        }

        $previousTier = $this->loyaltyTier();

        $transaction = $this->loyaltyTransactions()->create([
            'type' => 'adjust',
            'points' => $points,
            'reason' => $reason,
            'created_by' => $by?->getKey(),
        ]);

        $this->dispatchLoyaltyTierChangeIfAny($previousTier);

        return $transaction;
    }

    protected function dispatchLoyaltyTierChangeIfAny(string $previousTier): void
    {
        $newTier = $this->loyaltyTier();

        if ($newTier === $previousTier) {
            return;
        }

        // @phpstan-ignore-next-line argument.type — PHPStan analyses this trait on
        // its own, without knowing every consumer implements LoyaltyMember; the
        // contract is enforced at `class X implements LoyaltyMember { use HasLoyaltyPoints; }`.
        event(new TierChanged($this, $previousTier, $newTier));
    }
}
