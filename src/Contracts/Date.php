<?php

namespace CleaniqueCoders\Leave\Contracts;

use DateTime;

interface Date
{
    public function addLeaveDate(DateTime $datetime): Date;

    public function getLeaveDates(): array;

    public function getLeaveNumberOfDays(): int;
}
