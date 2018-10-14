<?php

namespace CleaniqueCoders\Leave\Contracts;

use DateTime;

interface Rejection
{
    public function isRejected(): bool;

    public function rejectedAt(): DateTime;

    public function rejectedBy(): Rejector;

    public function rejectedRemark(): string;
}
