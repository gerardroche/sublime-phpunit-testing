<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class TodoTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @todo beStrictAboutTodoAnnotatedTests="true"
     */
    public function testBeStrictAboutTodoAnnotatedTests()
    {
        $this->assertTrue(true);
    }
}
