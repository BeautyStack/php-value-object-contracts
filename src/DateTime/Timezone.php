<?php

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface Timezone extends ValueObjectInterface, Stringable
{
    public function jsonSerialize() : string;

    public function getValue(): string;
}