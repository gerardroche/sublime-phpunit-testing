<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class GroupTest extends \PHPUnit\Framework\TestCase
{
    public function testGroup1()
    {
        $this->assertTrue(true);
    }

    /**
     * @group hello
     */
    public function testExcludeGroupHello()
    {
        $this->assertTrue(true);
    }
}
