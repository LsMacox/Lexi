<?php

namespace Components;

use Abstractions\Glyph;
use Abstractions\Rect;
use Abstractions\Window;
use Interfaces\Point;

class Polygon extends Glyph
{
    public function Draw(Window $window): void
    {
        dump(__CLASS__ . ': [DRAW]');
        $window->DrawRect(1, 2, 3, 4);
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