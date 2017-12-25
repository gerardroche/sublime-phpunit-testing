<?php

namespace GerardRoche\SublimePHPUnitKitTesting;

class StrictCoverage
{
    public function a()
    {
        $this->b();

        return true;
    }

    public function b()
    {
    }
}
