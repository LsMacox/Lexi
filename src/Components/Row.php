<?php

namespace Components;

use Abstractions\Glyph;
use Abstractions\Point;
use Abstractions\Rect;
use Abstractions\Window;

class Row extends Glyph
{
    public function Draw(Window $window): void
    {
        $pointer = new \CursorPointer($window);

        foreach ($this->children as $child) {
            if ($this->Intersects($pointer)) {
                $child->Draw($window);
            }
        }
    }

    public function Bounds(Rect $rect): void
    {
        // TODO: Implement Bounds() method.
    }

    public function Intersects(Point $point): bool
    {
        $check = false;
        /* @var Glyph $child */
        foreach ($this->children as $child) {
             if (!$child->Intersects($point)) break;
        }
        return $check;
    }
}