<?php

namespace Components;

use Abstractions\Glyph;
use Abstractions\Rect;
use Abstractions\Window;
use Interfaces\Event;
use Interfaces\Point;
use CursorPointer;
use CursorEvent;

class Row extends Glyph
{
    protected Event $cursor_event;

    public function __construct()
    {
        $this->cursor_event = new CursorEvent();
    }

    public function Draw(Window $window): void
    {
        $pointer = new CursorPointer($this->cursor_event);

        dump(__CLASS__ . ': [DRAW]');

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