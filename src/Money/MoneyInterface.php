<?php

/*
 * Copyright © 2017-present The Stack World. All rights reserved.
 */

declare(strict_types=1);

namespace Beautystack\Value\Contracts\Money;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Doctrine\Common\Collections\Collection;

interface MoneyInterface extends ValueObjectInterface
{
    public function format(): string;

    public function getAmount(): int;

    public function getCurrency(): CurrencyInterface;

    public function toArray(): array;

    public function subtract(MoneyInterface $money): MoneyInterface;

    public function add(MoneyInterface $money): MoneyInterface;

    /**
     * @return Collection<MoneyInterface>
     */
    public function percent(int ...$percentages): Collection;

    public function jsonSerialize(): array;
}
