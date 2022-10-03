<?php

declare(strict_types=1);

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface DateInterface extends ValueObjectInterface, Stringable
{
    public function getValue(): string;

    public function toPhpDateTime(): \DateTime;

    /**
     * @return static
     */
    public static function fromPhpDateTime(\DateTime $dateTime): self;

    /**
     * @return static
     */
    public static function fromNow(string $timezone = 'UTC'): self;
}
