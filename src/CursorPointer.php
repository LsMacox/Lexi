<?php

use Interfaces\Event;
use Interfaces\Point;

class CursorPointer implements Point
{
    protected Event $event;

    public function __construct(CursorEvent $event)
    {
        $this->event = $event;
    }

    public function getCoordinateX(): int
    {
        return $this->event->event()[0];
    }

    public function getCoordinateY(): int
    {
        return $this->event->event()[1];
    }
}