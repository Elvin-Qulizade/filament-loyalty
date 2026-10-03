<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures;

use ElvinQulizade\Loyalty\Concerns\HasLoyaltyPoints;
use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements LoyaltyMember
{
    use HasLoyaltyPoints;

    protected $guarded = [];

    protected $table = 'customers';
}
