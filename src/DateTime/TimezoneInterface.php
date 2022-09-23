<?php

declare(strict_types=1);

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface TimezoneInterface extends ValueObjectInterface, Stringable
{
    public function jsonSerialize(): string;

    public function getValue(): string;
}
