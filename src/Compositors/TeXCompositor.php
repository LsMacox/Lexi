<?php

namespace Compositors;

use Abstractions\Compositor;

class TeXCompositor extends Compositor
{
    public function Compose(): void
    {
        dump(__CLASS__ . ': [COMPOSE]');
    }
}