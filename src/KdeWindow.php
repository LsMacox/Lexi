<?php

use Abstractions\Event;
use Abstractions\Window;

class KdeWindow extends Window
{
    protected Event $cursorEvent;

    public function __construct()
    {
        $this->cursorEvent = new CursorEvent();
    }

    public function getEvent(): Event
    {
        return $this->cursorEvent;
    }

    public function DrawMessage(mixed $mixed): void
    {
        var_dump($mixed);
    }

    public function DrawRect(...$coordinates): void
    {
        var_dump('[DRAW RECT]:');
        $this->fill('red');
        $this->stroke(new CoordinatesParams(...$coordinates));
    }

    public function DrawCharacter(string $character): void
    {
        var_dump('[DRAW CHARACTER]:' . $character);
    }

    private function fill(string $color): void
    {
        var_dump('[FILL COLOR]:' . $color);
    }

    private function stroke(CoordinatesParams $coordinatesParams): void
    {
        var_dump(
            '[STROKE WITH COORDINATES]:' .
            $coordinatesParams->get()[0] . ' ' .
            $coordinatesParams->get()[1] . ' ' .
            $coordinatesParams->get()[2] . ' ' .
            $coordinatesParams->get()[3]
        );
    }
}