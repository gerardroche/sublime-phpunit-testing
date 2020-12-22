<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class RiskyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @todo disallow phpdoc todo
     */
    public function testDisallowTodoTests()
    {
        $this->assertTrue(true);
    }

    public function testSkip()
    {
        $this->markTestSkipped();
    }

    public function testDisallowTestOutput()
    {
        echo 'hello!';
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
