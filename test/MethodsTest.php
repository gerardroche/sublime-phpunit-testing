<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class MethodsTest extends \PHPUnit\Framework\TestCase
{
    public function testCamelCaseTestMethod()
    {
        $this->assertTrue(true);
    }

    public function test_under_score_test_method()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function annotated_underscore_test_method()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function annotatedUnderscoreTestMethod()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function oneline_annotated_underscore_test_method()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function onelineAnnotatedUnderscoreTestMethod()
    {
        $this->assertTrue(true);
    }
}
