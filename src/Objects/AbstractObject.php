<?php

namespace Booni3\RedstagWms\Objects;

abstract class AbstractObject
{
    public function toArray(): array
    {
        return array_filter(get_object_vars($this), fn ($value) => $value !== null);
    }
}
