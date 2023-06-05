<?php

namespace Compositors;

use Abstractions\Compositor;

class ArrayCompositor extends Compositor
{
    public function Compose(): void
    {
        dump(__CLASS__ . ': [COMPOSE]');
    }
}