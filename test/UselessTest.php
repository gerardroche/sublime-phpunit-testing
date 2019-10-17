<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class UselessTest extends \PHPUnit\Framework\TestCase
{
    public function testReportUselessTests()
    {
        str_rot13('abc');
        // $this->assertTrue(true);
    }
}
