<?php

namespace ElvinQulizade\Loyalty\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @property int $id
 * @property string $member_type
 * @property int|string $member_id
 * @property string $type
 * @property int $points
 * @property string|null $reason
 * @property string|null $source_type
 * @property int|string|null $source_id
 * @property int|null $created_by
 */
class LoyaltyTransaction extends Model
{
    protected $table = 'loyalty_transactions';

    protected $guarded = [];

    public const UPDATED_AT = null;

    public function member(): MorphTo
    {
        return $this->morphTo();
    }

    public function source(): MorphTo
    {
        return $this->morphTo();
    }
}
