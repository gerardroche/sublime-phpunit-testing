<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class DeepThoughtTest extends \PHPUnit_Framework_TestCase
{
    public function testTheAnswerToTheUltimateQuestionOfLifeTheUniverseAndEverything()
    {
        $this->assertSame(42, DeepThought::theAnswerToTheUltimateQuestionOfLifeTheUniverseAndEverything());
    }
}
