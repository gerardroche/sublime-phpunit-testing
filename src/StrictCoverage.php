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
}
