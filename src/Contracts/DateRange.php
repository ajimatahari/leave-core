<?php

namespace CleaniqueCoders\Leave\Contracts;

use DateTime;

interface DateRange
{
    public function addDateRange(DateTime $startDateTime, DateTime $endDateTime, bool $skip_weekend = true): DateRange;
}
