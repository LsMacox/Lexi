<?php

use Interfaces\Point;
use Interfaces\Window;

class CursorPointer implements Point
{
    protected Window $window;

    public function __construct(Window $window)
    {
        $this->window = $window;
    }

    public function getCoordinateX(): int
    {
        return $this->window->getEvent()->getCoordinates()[0];
    }

    public function getCoordinateY(): int
    {
        return $this->window->getEvent()->getCoordinates()[1];
    }
}