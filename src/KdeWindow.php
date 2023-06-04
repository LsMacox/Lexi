<?php

use Interfaces\Event;
use Interfaces\Window;

class KdeWindow implements Window
{
    protected Event $event;

    public function __construct(event $event)
    {
        $this->event = $event;
    }

    public function getEvent(): Event
    {
        return $this->event;
    }

    public function DrawMessage(mixed $mixed): void
    {
        dump($mixed);
    }

    public function DrawRect(...$coordinates): void
    {
        dump('[DRAW RECT]');
        $this->stroke(new CoordinatesParams(...$coordinates));
    }

    public function DrawCharacter(string $character): void
    {
        dump('[DRAW CHARACTER]: ' . $character);
    }

    private function stroke(CoordinatesParams $coordinatesParams): void
    {
        dump(
            '[STROKE WITH COORDINATES]: ' .
            $coordinatesParams->get()[0] . ' ' .
            $coordinatesParams->get()[1] . ' ' .
            $coordinatesParams->get()[2] . ' ' .
            $coordinatesParams->get()[3]
        );
    }
}