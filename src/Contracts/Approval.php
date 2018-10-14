<?php

namespace CleaniqueCoders\Leave\Contracts;

use DateTime;

interface Approval
{
    public function isApproved(): bool;

    public function approvedAt(): DateTime;

    public function approvedBy(): Approver;

    public function approvedRemark(): string;
}
