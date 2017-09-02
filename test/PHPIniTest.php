<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class PHPIniTest extends \PHPUnit\Framework\TestCase
{
    public function testErrorReporting()
    {
        $this->assertSame('-1', ini_get('error_reporting'));
    }

    public function testDisplayErrors()
    {
        $this->assertSame('1', ini_get('display_errors'));
    }

    public function testXDebug()
    {
        $this->assertSame('0', ini_get('xdebug.scream'));
        $this->assertFalse((bool) ini_get('xdebug.scream'));
    }
}
