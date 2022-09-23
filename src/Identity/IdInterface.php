<?php

declare(strict_types=1);
namespace Beautystack\Value\Contracts\Identity;

use Beautystack\Value\Contracts\ValueObjectInterface;

use Stringable;

interface IdInterface extends ValueObjectInterface, Stringable
{
    public function getValue(): string;

    public function isUuid(): bool;
}
