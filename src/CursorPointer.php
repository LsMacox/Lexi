<?php

use Abstractions\Point;
use Abstractions\Window;

class CursorPointer extends Point
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