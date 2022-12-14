<?php

declare(strict_types=1);

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface DateInterface extends ValueObjectInterface, Stringable
{
    public function getValue(): string;

    public function toPhpDateTime(): \DateTime;

    public static function fromPhpDateTime(\DateTime $dateTime): self;
}
