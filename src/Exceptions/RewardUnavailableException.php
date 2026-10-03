<?php

namespace ElvinQulizade\Loyalty\Exceptions;

use RuntimeException;

class RewardUnavailableException extends RuntimeException
{
    public static function inactive(): self
    {
        return new self('This reward is no longer active.');
    }

    public static function outOfStock(): self
    {
        return new self('This reward is out of stock.');
    }
}
