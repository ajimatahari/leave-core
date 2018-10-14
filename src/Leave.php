<?php

namespace CleaniqueCoders\Leave;

use CleaniqueCoders\Leave\Contracts\Detail as LeaveDetailContract;
use CleaniqueCoders\Leave\Contracts\Leave as LeaveContract;

class Leave implements LeaveContract
{
    /**
     * List of Leave Details.
     *
     * @var array
     */
    protected $leaves = [];

    /**
     * Added Leave Application Detail.
     *
     * @param \CleaniqueCoders\Leave\Contracts\Detail $leaveDetail
     */
    public function addLeave(LeaveDetailContract $leaveDetail)
    {
        $this->leaves[] = $leaveDetail;
    }

    /**
     * Return list of Leave Application Detail.
     *
     * @return [type] [description]
     */
    public function getLeaves(): array
    {
        return $this->leaves;
    }
}
