<?php
namespace Beautystack\Value\Contracts\Identity;

use Beautystack\Value\Contracts\ValueObjectInterface;

interface Id extends ValueObjectInterface
{
    public function getValue(): string;

    public function __toString(): string;
}