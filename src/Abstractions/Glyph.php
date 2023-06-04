<?php

namespace Abstractions;

use Interfaces\Factory\Window;
use Interfaces\Point;

abstract class Glyph
{
    protected int $childIdx;
    protected ?Glyph $parent = null;
    public static array $children = [];

    abstract public function Draw(Window $window): void;
    abstract public function Bounds(Rect $rect): void;
    abstract public function Intersects(Point $point): bool;

    public function Insert(Glyph $glyph, ?int $idx = null): void
    {
        $glyph->setParent($this);
        $glyph->setChildIdx($idx ?? count(static::$children) + 1);
        $this->addChild($glyph, $idx);
    }

    public function Remove(Glyph $glyph): void
    {
        $this->removeChild($glyph->getChildIdx());
    }

    public function Child(int $idx): Glyph {
        return static::$children[$idx];
    }

    public function Parent(): Glyph {
        return $this->parent;
    }

    protected function getChildIdx(): int
    {
        return $this->childIdx;
    }

    protected function setChildIdx(int $idx): void
    {
        $this->childIdx = $idx;
    }

    protected function setParent(Glyph $glyph): void
    {
        $this->parent = $glyph;
    }

    protected function addChild(Glyph $glyph, ?int $idx): void
    {
        if ($idx) {
            static::$children[$idx] = $glyph;
        } else {
            static::$children[] = $glyph;
        }
    }

    protected function removeChild(int $idx): void
    {
        unset(static::$children[$idx]);
    }
}