<?php

namespace Beautystack\Value\Contracts\Money;

use Beautystack\Value\Contracts\ValueObjectInterface;

use Stringable;

interface Currency extends ValueObjectInterface, Stringable
{
    public function jsonSerialize() : string;

    public function getValue() : string;
}