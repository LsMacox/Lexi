<?php

use Interfaces\Event;

class CursorEvent implements Event
{
    public function emit(): void
    {
        // TODO: Implement emit() method.
    }

    public function event(): array
    {
        return $this->getCoordinates();
    }

    protected function getCoordinates(): array
    {
        return [0, 0];
    }
}