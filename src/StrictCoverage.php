<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class StrictCoverage
{
    public function coversBuzz()
    {
        $this->buzz();

        return true;
    }

    public function buzz()
    {
        return true;
    }

    /**
     * @codeCoverageIgnore
     */
    public function ignored()
    {
        return true;
    }

    // @codeCoverageIgnoreStart
    public function ignoredStart()
    {
        return true;
    }

    public function ignoredEnd()
    {
        return true;
    }
    // @codeCoverageIgnoreEnd
}
