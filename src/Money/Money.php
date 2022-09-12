<?php

/*
 * Copyright © 2017-present The Stack World. All rights reserved.
 */

declare(strict_types=1);

namespace Beautystack\Value\Contracts\Money;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Doctrine\Common\Collections\Collection;

interface Money extends ValueObjectInterface
{

    public function format(): string;

    public function getAmount(): int;

    public function getCurrency(): Currency;

    public function toArray(): array;

    public function subtract(Money $money): Money;

    public function add(Money $money): Money;

    /**
     * @return Collection<Money>
     */
    public function percent(int ...$percentages): Collection;

    public function jsonSerialize() : array;
}
