<?php

namespace Abstractions;

// @pattern Strategy
abstract class Compositor
{
    protected Composition $composition;

    abstract public function Compose(): void;

    public function SetComposition(Composition $composition): void
    {
        $this->composition = $composition;
    }
}