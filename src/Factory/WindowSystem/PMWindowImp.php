<?php

namespace Factory\WindowSystem;

use CoordinatesParams;
use Interfaces\WindowSystemFactory\WindowImp;

class PMWindowImp implements WindowImp
{
    public function DeviceRect(CoordinatesParams $params): void
    {
        $left = min($params->get()[0], $params->get()[1]);
        $right = max($params->get()[2], $params->get()[3]);
        $bottom = min($params->get()[1], $params->get()[3]);
        $top = max($params->get()[1],- $params->get()[3]);

        $this->PMDrawRectangle($left, $right, $bottom, $top);
    }

    protected function PMDrawRectangle(int $left, int $right, int $bottom, int $top): void
    {
        dump(__CLASS__ . ': [DRAW RECTANGLE] ' . $left . ' ' . $right . ' ' . $bottom . ' ' . $top);
    }
}