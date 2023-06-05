<?php

namespace Components\Decorators;

use Abstractions\MonoGlyph;
use Abstractions\Window;

class ScrollerDecorator extends MonoGlyph
{
    public function Draw(Window $window): void
    {
        parent::Draw($window);
        $this->DrawScroll($window);
    }

    private function DrawScroll(Window $window): void
    {
        $window->DrawText('[DECORATOR DRAW SCROLL]');
    }
}