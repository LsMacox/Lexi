<?php

use Interfaces\Event;

class CursorEvent implements Event
{
    public function getCoordinates(): array
    {
        return [0, 0];
    }
}