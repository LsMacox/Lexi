<?php

namespace Components\Decorators;

use Abstractions\MonoGlyph;
use Interfaces\Factory\Window;

class BorderDecorator extends MonoGlyph
{
    public function Draw(Window $window): void
    {
        parent::Draw($window);
        $this->DrawBorder($window);
    }

    private function DrawBorder(Window $window): void
    {
        $window->DrawMessage('[DECORATOR DRAW BORDER]');
    }
}