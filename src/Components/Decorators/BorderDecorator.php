<?php

namespace Components\Decorators;

use Abstractions\MonoGlyph;
use Abstractions\Window;

class BorderDecorator extends MonoGlyph
{
    public function Draw(Window $window): void
    {
        parent::Draw($window);
        $this->DrawBorder($window);
    }

    private function DrawBorder(Window $window): void
    {
        $window->DrawText('[DECORATOR DRAW BORDER]');
    }
}