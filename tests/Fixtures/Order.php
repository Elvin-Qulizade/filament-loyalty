<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $guarded = [];

    protected $table = 'orders';

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
