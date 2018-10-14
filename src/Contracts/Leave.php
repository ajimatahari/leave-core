<?php

namespace CleaniqueCoders\Leave\Contracts;

interface Leave
{
    public function addLeave(Detail $detail);

    public function getLeaves(): array;
}
