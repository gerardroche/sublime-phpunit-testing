<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class ToggleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @todo disallow phpdoc todo
     */
    public function testDisallowTodoTests()
    {
        $this->assertTrue(true);
    }

    public function testDisallowTestOutput()
    {
        echo "hello!";
        $this->assertTrue(true);
    }

    public function testReportUselessTests()
    {
        $x = null;
    }

    /**
     * @covers \GerardRoche\SublimePHPUnitKitTesting\StrictCoverage::a
     */
    public function testStrictCoverage()
    {
        $strictCoverage = new StrictCoverage();

        $this->assertTrue($strictCoverage->a());
    }
}
