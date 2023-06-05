<?php

namespace Compositors;

use Abstractions\Compositor;

class SimpleCompositor extends Compositor
{
    public function Compose(): void
    {
        dump(__CLASS__ . ': [COMPOSE]');
    }
}