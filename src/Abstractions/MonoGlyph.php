<?php

namespace Abstractions;

// @pattern Decorator
use Interfaces\Factory\Window;
use Interfaces\Point;

abstract class MonoGlyph extends Glyph
{
    protected Glyph $component;

    public function __construct(Glyph $component)
    {
        $this->component = $component;
    }

    public function Draw(Window $window): void
    {
        $this->component->Draw($window);
    }

    public function Bounds(Rect $rect): void
    {
        $this->component->Bounds($rect);
    }

    public function Intersects(Point $point): bool
    {
        $this->component->Intersects($point);
    }
}