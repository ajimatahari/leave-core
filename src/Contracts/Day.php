<?php

namespace CleaniqueCoders\Leave\Contracts;

use DateTime;

interface Day
{
    public function getWeekendDays(): array;

    public function isWeekend(DateTime $datetime): bool;

    public function isWeekday(DateTime $datetime): bool;
}
