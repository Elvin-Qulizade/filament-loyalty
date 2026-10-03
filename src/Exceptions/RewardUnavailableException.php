<?php

namespace ElvinQulizade\Loyalty\Exceptions;

use RuntimeException;

class RewardUnavailableException extends RuntimeException
{
    public static function inactive(): static
    {
        return new static('This reward is no longer active.');
    }

    public static function outOfStock(): static
    {
        return new static('This reward is out of stock.');
    }
}
