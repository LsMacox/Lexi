<?php

namespace Components;

use Abstractions\Composition;
use Abstractions\Rect;
use Abstractions\Window;
use Interfaces\Point;

class Character extends Composition
{
    public function Draw(Window $window): void
    {
        dump(__CLASS__ . ': [DRAW]');
        $window->DrawText('a');
    }

    public function Bounds(Rect $rect): void
    {
        // TODO: Implement Bounds() method.
    }

    public function Intersects(Point $point): bool
    {
        return true;
    }
}