<?php

namespace CleaniqueCoders\Leave\Tests;

class LeaveDetailTest extends TestCase
{
    private $leave_detail;

    public function setUp()
    {
        parent::setUp();
        $this->leave_detail = new \CleaniqueCoders\Leave\LeaveDetail('Leave Application Title', 'Purpose of The Leave Application');
    }

    /** @test */
    public function it_has_leave_detail_file()
    {
        $this->assertFileExists(dirname(__DIR__) . '/src/LeaveDetail.php');
    }

    /** @test */
    public function it_has_leave_detail_class()
    {
        $this->assertClassExist(\CleaniqueCoders\Leave\LeaveDetail::class);
    }

    /** @test */
    public function it_instance_of_leave_detail()
    {
        $this->assertInstanceOf(
            \CleaniqueCoders\Leave\LeaveDetail::class,
            $this->leave_detail
        );
    }

    /** @test */
    public function it_has_require_attributes()
    {
        $attributes = [
            'purpose', 'title', 'leave_dates',
            'weekend_days', 'type',
        ];

        foreach ($attributes as $attribute) {
            $this->assertClassHasAttribute($attribute, \CleaniqueCoders\Leave\LeaveDetail::class);
        }
    }
}
