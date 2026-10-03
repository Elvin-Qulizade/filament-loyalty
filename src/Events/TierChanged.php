<?php

namespace ElvinQulizade\Loyalty\Events;

use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;

class TierChanged
{
    public function __construct(
        public readonly LoyaltyMember $member,
        public readonly string $previousTier,
        public readonly string $newTier,
    ) {}
}
