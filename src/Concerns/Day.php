<?php

namespace CleaniqueCoders\Leave\Concerns;

use CleaniqueCoders\Leave\Contracts\Day;
use DateTime;

trait Day
{
    /**
     * Weekend Days.
     *
     * @var array
     */
    protected $weekend_days = ['Saturday', 'Sunday'];

    /**
     * Get Weekend Days.
     *
     * @return array
     */
    public function getWeekendDays(): array
    {
        return $this->weekend_days;
    }

    /**
     * Determine given date is weekend.
     *
     * @todo should get weekend days instead of hardcoded the value
     *
     * @param DateTime $datetime
     *
     * @return bool
     */
    public function isWeekend(DateTime $datetime): bool
    {
        return in_array($datetime->format('l'), $this->getWeekendDays());
    }

    /**
     * Determine given date is on weekday.
     *
     * @param DateTime $datetime
     *
     * @return bool
     */
    public function isWeekday(DateTime $datetime): bool
    {
        return ! $this->isWeekend($datetime);
    }
}
