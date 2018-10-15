<?php

namespace CleaniqueCoders\Leave\Contracts;

use CleaniqueCoders\Leave\Contracts\Date as DateContract;
use CleaniqueCoders\Leave\Contracts\DateRange as DateRangeContract;
use CleaniqueCoders\Leave\Contracts\Day as DayContract;
use CleaniqueCoders\Leave\Contracts\Type as TypeContract;

interface Detail extends DayContract, DateContract, DateRangeContract, TypeContract
{
    public function setPurpose(string $purpose): Detail;

    public function getPurpose(): string;

    public function setTitle(string $title): Detail;

    public function getTitle(): string;
}
