<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class SkipTest extends \PHPUnit\Framework\TestCase
{
    public function testSkip()
    {
        $this->markTestSkipped();
    }
}
