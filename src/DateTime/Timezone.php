<?php

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;

interface Timezone extends ValueObjectInterface
{
    public function jsonSerialize() : string;

    public function getValue(): string;
}