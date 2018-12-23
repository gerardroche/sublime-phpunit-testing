<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class StrictCoverageTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \GerardRoche\SublimePHPUnitKitTesting\StrictCoverage::coversBuzz
     */
    public function testStrictCoverage()
    {
        $strictCoverage = new StrictCoverage();

        $this->assertTrue($strictCoverage->coversBuzz());
    }

    public function testNoCoversAnnotation()
    {
        $this->assertTrue(true);
    }
}
