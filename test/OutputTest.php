<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class OutputTest extends \PHPUnit\Framework\TestCase
{
    public function testDisallowTestOutput()
    {
        echo 'hello!';
    }
}
