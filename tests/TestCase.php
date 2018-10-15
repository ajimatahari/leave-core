<?php

namespace CleaniqueCoders\Leave\Tests;

use PHPUnit\Framework\TestCase as PHPUnit;

class TestCase extends PHPUnit
{
    public function assertClassExist($class)
    {
        $this->assertTrue(class_exists($class));
    }
}
