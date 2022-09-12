<?php

/*
 * Copyright © 2017-present The Stack World. All rights reserved.
 */

declare(strict_types=1);

namespace Beautystack\Value\Contracts\DateTime;

use JsonSerializable;

interface DateTime extends JsonSerializable
{
    public function addInterval(int $seconds): self;

    public function removeInterval(int $seconds, self $dateTimeFrom = null): self;

    public function format(string $format, ?string $timeZone): string;

    public function toPhpDateTime(): \DateTime;

    public function getValue(): string;

    public function getTimestamp() : int;

    public function isBefore(self $compareDate, bool $inclusive = false): bool;

    public function isAfter(self $compareDate, bool $inclusive = false): bool;

    public function __toString(): string;
}
