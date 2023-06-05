<?php

namespace Factory;

use Factory\WindowSystem\PMWindowImp;
use Interfaces\WindowSystemFactory;
use Interfaces\WindowSystemFactory\WindowImp;

class PMWindowSystemFactory implements WindowSystemFactory
{
    public function __construct()
    {
        dump(__CLASS__ . ': [CREATE]');
    }

    public function createWindowImp(): WindowImp
    {
        return new PMWindowImp();
    }

    public function createColorImp(): void
    {
        // TODO: Implement createColorImp() method.
    }

    public function createFontImp(): void
    {
        // TODO: Implement createFontImp() method.
    }
}