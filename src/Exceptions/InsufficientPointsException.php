<?php

namespace ElvinQulizade\Loyalty\Exceptions;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;
use RuntimeException;

class InsufficientPointsException extends RuntimeException
{
    public function __construct(LoyaltyMember $member, int $requested)
    {
        parent::__construct(sprintf(
            'Requested %d points but only %d are available.',
            $requested,
            $member->loyaltyBalance(),
        ));
    }
}
