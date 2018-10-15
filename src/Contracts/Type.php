<?php

namespace CleaniqueCoders\Leave\Contracts;

interface Type
{
    public function setType(string $string): Type;

    public function getType(): string;
}
