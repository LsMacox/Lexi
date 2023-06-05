<?php

namespace Factory\WindowSystem;

use CoordinatesParams;
use Interfaces\WindowSystemFactory\WindowImp;

class XWindowImp implements WindowImp
{
    public function DeviceRect(CoordinatesParams $params): void
    {
        $x = round(min($params->get()[0], $params->get()[1]));
        $y = round(min($params->get()[2], $params->get()[3]));
        $w = round(abs($params->get()[0] - $params->get()[1]));
        $h = round(abs($params->get()[2] - $params->get()[3]));

        $this->XDrawRectangle($x, $y, $w, $h);
    }

    protected function XDrawRectangle(int $x, int $y, int $w, int $h): void
    {
        dump(__CLASS__ . '[DRAW RECTANGLE]: ' . $x . ' ' . $y . ' ' . $w . ' ' . $h);
    }
}