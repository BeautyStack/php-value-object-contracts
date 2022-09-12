<?php

namespace Beautystack\Value\Contracts\Money;

use Beautystack\Value\Contracts\ValueObjectInterface;

interface Currency extends ValueObjectInterface
{
    public function jsonSerialize() : string;
}