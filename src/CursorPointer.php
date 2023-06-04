<?php

use Interfaces\Factory\Window;
use Interfaces\Point;

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