<?php

namespace ElvinQulizade\Loyalty\Support;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use ElvinQulizade\Loyalty\Models\LoyaltyTransaction;
use Illuminate\Database\Eloquent\Model;

class LoyaltyRuleRegistrar
{
    public static function boot(): void
    {
        foreach (array_keys((array) config('filament-loyalty.rules', [])) as $modelClass) {
            /** @var class-string<Model> $modelClass */
            $modelClass::saved(function (Model $model) use ($modelClass): void {
                static::handle($modelClass, $model);
            });
        }
    }

    protected static function handle(string $modelClass, Model $model): void
    {
        $rule = config("filament-loyalty.rules.{$modelClass}");

        if ($rule === null || ! (bool) ($rule['when'])($model)) {
            return;
        }

        $member = ($rule['member'])($model);

        if (! $member instanceof LoyaltyMember) {
            return;
        }

        $alreadyAwarded = LoyaltyTransaction::query()
            ->where('source_type', $modelClass)
            ->where('source_id', $model->getKey())
            ->where('type', 'earn')
            ->exists();

        if ($alreadyAwarded) {
            return;
        }

        $points = (int) ($rule['points'])($model);

        $member->earnLoyaltyPoints($points, reason: 'Earned from ' . class_basename($modelClass), source: $model);
    }
}
