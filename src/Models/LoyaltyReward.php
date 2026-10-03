<?php

namespace ElvinQulizade\Loyalty\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $points_cost
 * @property int|null $stock
 * @property bool $active
 */
class LoyaltyReward extends Model
{
    protected $table = 'loyalty_rewards';

    protected $guarded = [];

    protected $casts = [
        'active' => 'boolean',
    ];
}
