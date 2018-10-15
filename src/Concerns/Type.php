<?php

namespace CleaniqueCoders\Leave\Concerns;

use CleaniqueCoders\Leave\Contracts\Type as TypeContract;

trait Type
{
    protected $type = '';

    public function setType(string $type): TypeContract
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
