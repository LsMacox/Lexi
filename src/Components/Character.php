<?php

namespace Components;

use Abstractions\Composition;
use Abstractions\Glyph;
use Abstractions\Point;
use Abstractions\Rect;
use Abstractions\Window;

class Character extends Composition
{
    public function Draw(Window $window): void
    {
        $window->DrawCharacter('a');
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