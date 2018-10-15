<?php

namespace CleaniqueCoders\Leave\Concerns;

use CleaniqueCoders\Leave\Contracts\Type as TypeContract;

trait Type
{
    /**
     * Type of the Leave.
     *
     * @var string
     */
    protected $type = '';

    /**
     * Set type of the leave.
     *
     * @param string $type
     */
    public function setType(string $type): TypeContract
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type of the leave.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
