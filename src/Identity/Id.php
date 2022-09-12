<?php
namespace Beautystack\Value\Contracts\Identity;

use Beautystack\Value\Contracts\ValueObjectInterface;
use Stringable;

interface Id extends ValueObjectInterface, Stringable
{
    public function getValue(): string;

}