<?php

namespace Interfaces\WindowSystemFactory;

use CoordinatesParams;

interface WindowImp
{
    public function DeviceRect(CoordinatesParams $params): void;
}