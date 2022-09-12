<?php

namespace Beautystack\Value\Contracts;

use JsonSerializable;

interface ValueObjectInterface extends JsonSerializable
{
    public function isEqual(self $compareValueObject): bool;

}