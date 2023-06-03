<?php

namespace Components;

use Abstractions\Glyph;
use Abstractions\Point;
use Abstractions\Rect;
use Abstractions\Window;

class Polygon extends Glyph
{
    public function Draw(Window $window): void
    {
        $window->DrawRect(1, 2, 3, 4);
    }

    public function Bounds(Rect $rect): void
    {
        // TODO: Implement Bounds() method.
    }

    public function Intersects(Point $point): bool
    {
        return false;
    }
}