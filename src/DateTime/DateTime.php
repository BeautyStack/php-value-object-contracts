<?php

declare(strict_types=1);

namespace Beautystack\Value\Contracts\DateTime;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface DateTime extends ValueObjectInterface, Stringable
{
    public function addInterval(int $seconds): DateTime;

    public function removeInterval(int $seconds): DateTime;

    public function firstDayOfLastMonth(Timezone $timezone, string $time = '00:00:00'): DateTime;

    public function firstDayOfNextMonth(Timezone $timezone, string $time = '00:00:00'): DateTime;

    public function lastDayOfThisMonth(Timezone $timezone, string $time = '00:00:00'): DateTime;

    public function firstDayOfThisMonth(Timezone $timezone, string $time = '00:00:00'): DateTime;

    public function format(string $format, Timezone $timeZone): string;

    public function toPhpDateTime(): \DateTime;

    public function getValue(): string;

    public function getTimestamp() : int;

    public function isBefore(DateTime $compareDate, bool $inclusive = false): bool;

    public function isAfter(DateTime $compareDate, bool $inclusive = false): bool;

    public function jsonSerialize(): string;
}
