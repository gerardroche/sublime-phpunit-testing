<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class DeepThoughtTest extends \PHPUnit\Framework\TestCase
{
    public function testTheAnswerToTheUltimateQuestionOfLifeTheUniverseAndEverything()
    {
        $this->assertSame(42, DeepThought::theAnswerToTheUltimateQuestionOfLifeTheUniverseAndEverything());
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFalse()
    {
        $this->assertFalse(false);
    }
}
