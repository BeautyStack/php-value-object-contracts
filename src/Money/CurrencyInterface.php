<?php

declare(strict_types=1);

namespace Beautystack\Value\Contracts\Money;

use Beautystack\Value\Contracts\ValueObjectInterface;

use Stringable;

interface CurrencyInterface extends ValueObjectInterface, Stringable
{
    public function jsonSerialize(): string;

    public function getValue(): string;
}
