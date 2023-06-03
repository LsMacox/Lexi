<?php

use Abstractions\Event;

class CursorEvent extends Event
{
    public function getCoordinates(): array
    {
        return [0, 0];
    }
}