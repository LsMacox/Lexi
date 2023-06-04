<?php

namespace Interfaces;

interface Window
{
    public function DrawMessage(mixed $mixed): void;
    public function DrawRect(int $x0, int $y0, int $x1, int $y1): void;
    public function DrawCharacter(string $character): void;

    public function getEvent(): Event;
}