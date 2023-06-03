<?php

namespace Abstractions;

// @pattern Strategy
abstract class Composition extends Glyph
{
    protected Compositor $compositor;

    public function Insert(Glyph $glyph, int $idx = -1): void
    {
        $glyph->Insert($glyph);
        $this->compositor->Compose();
    }

    public function setCompositor(Compositor $compositor)
    {
        $this->compositor = $compositor;
    }
}