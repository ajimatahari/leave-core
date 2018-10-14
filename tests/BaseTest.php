<?php

namespace CleaniqueCoders\Leave\Tests;

use CleaniqueCoders\Leave\Contracts\Leave as LeaveContract;
use CleaniqueCoders\Leave\Leave;

class BaseTest extends TestCase
{
    /** @test */
    public function it_has_leave_class()
    {
        $this->assertTrue(class_exists(\CleaniqueCoders\Leave\Leave::class));
    }

    /** @test */
    public function it_has_leave_contract()
    {
        $this->assertTrue((new Leave()) instanceof LeaveContract);
    }
}
