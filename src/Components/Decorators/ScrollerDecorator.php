<?php

namespace Components\Decorators;

use Abstractions\MonoGlyph;
use Interfaces\Factory\Window;

class ScrollerDecorator extends MonoGlyph
{
    public function Draw(Window $window): void
    {
        parent::Draw($window);
        $this->DrawScroll($window);
    }

    private function DrawScroll(Window $window): void
    {
        $window->DrawMessage('[DECORATOR DRAW SCROLL]');
    }
}