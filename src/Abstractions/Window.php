<?php

namespace Abstractions;

abstract class Window
{
    abstract public function DrawRect(int $x0, int $y0, int $x1, int $y1): void;
    abstract public function DrawCharacter(string $character): void;

    abstract public function getEvent(): Event;
}