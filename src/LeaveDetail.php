<?php

namespace CleaniqueCoders\Leave;

use CleaniqueCoders\Leave\Concerns\Day;
use CleaniqueCoders\Leave\Contracts\Date as DateContract;
use CleaniqueCoders\Leave\Contracts\DateRange as DateRangeContract;
use CleaniqueCoders\Leave\Contracts\Detail as DetailContract;
use DateTime;

class LeaveDetail implements DateContract, DayContract, DateRangeContract, DetailContract
{
    use Day;

    /**
     * Title of the Leave Application.
     *
     * @var string
     */
    protected $title;

    /**
     * Purpose of the Leave Application.
     *
     * @var string
     */
    protected $purpose;

    /**
     * List of leave application dates.
     *
     * @var array
     */
    protected $leave_dates;

    public function __construct(string $title, string $purpose)
    {
        $this->title       = $title;
        $this->purpose     = $purpose;
        $this->leave_dates = [];
    }

    /**
     * Set Purpose of Leave Application.
     *
     * @param string $purpose
     *
     * @return \CleaniqueCoders\Leave\Contracts\Detail
     */
    public function setPurpose(string $purpose): DetailContract
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get Purpose of Leave Application.
     *
     * @return string
     */
    public function getPurpose(): string
    {
        return $this->purpose;
    }

    /**
     * Set Title of Leave Application.
     *
     * @param string $purpose
     *
     * @return \CleaniqueCoders\Leave\Contracts\Detail
     */
    public function setTitle(string $title): DetailContract
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Purpose of Leave Application.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Add Leave Date.
     *
     * @param \DateTime $datetime
     *
     * @return \CleaniqueCoders\Leave\Contracts\Date
     */
    public function addLeaveDate(DateTime $datetime)
    {
        $this->leave_dates[] = $datetime;

        return $this;
    }

    /**
     * Get List of Leave Dates.
     *
     * @return array
     */
    public function getLeaveDates(): array
    {
        return $this->leave_dates;
    }

    /**
     * @return int Return number of days leave applied
     */
    public function getLeaveNumberOfDays(): int
    {
        return sizeof($this->leave_dates);
    }

    /**
     * @param \DateTime $startDateTime Start DateTime for Leave
     * @param \DateTime $endDateTime   End DateTime for Leave
     * @param bool|bool $skip_weekend
     *
     * @return \CleaniqueCoders\Leave\Contracts\DateRange
     */
    public function addDateRange(DateTime $startDateTime, DateTime $endDateTime, bool $skip_weekend = true)
    {
        $period = new \DatePeriod(
             $startDateTime,
             new \DateInterval('P1D'),
             $endDateTime
        );

        foreach ($period as $date) {
            if ($skip_weekend && $this->isWeekend($date)) {
                continue;
            }

            $this->addLeaveDate($date);
        }

        return $this;
    }
}
