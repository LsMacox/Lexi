<?php

namespace Interfaces;

use Interfaces\WindowSystemFactory\WindowImp;

/* @pattern Factory */
interface WindowSystemFactory
{
    public function createWindowImp(): WindowImp;
    public function createColorImp(): void; // Can declare these imp fabrics
    public function createFontImp(): void;
}