<?php

namespace Components;

use Abstractions\Glyph;
use Abstractions\Rect;
use Interfaces\Point;
use Interfaces\Window;

class Row extends Glyph
{
    public function Draw(Window $window): void
    {
        $pointer = new \CursorPointer($window);

        dump('[DRAW ROW]');

        /** @var Glyph $child */
        foreach (static::$children as $child) {
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
        $check = true;
        /* @var Glyph $child */
        foreach (static::$children as $child) {
             if (!$child->Intersects($point)) {
                 $check = false;
                 break;
             };
        }
        return $check;
    }
}