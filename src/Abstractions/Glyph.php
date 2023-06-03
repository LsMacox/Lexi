<?php

namespace Abstractions;

abstract class Glyph
{
    protected int $childIdx;
    protected ?Glyph $parent = null;
    protected array $children = [];

    abstract public function Draw(Window $window): void;
    abstract public function Bounds(Rect $rect): void;
    abstract public function Intersects(Point $point): bool;

    public function Insert(Glyph $glyph, int $idx = -1): void
    {
        $glyph->setParent($this);
        $glyph->setChildIdx($idx !== -1 ? $idx : count($this->children) + 1);
        $this->addChild($glyph, $idx);
    }

    public function Remove(Glyph $glyph): void
    {
        $this->removeChild($glyph->getChildIdx());
    }

    public function Child(int $idx): Glyph {
        return $this->children[$idx];
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

    protected function addChild(Glyph $glyph, ?int $idx = -1): void
    {
        if ($idx !== -1) {
            $this->children[] = $glyph;
        }
        $this->children[$idx] = $glyph;
    }

    protected function removeChild(int $idx): void
    {
        unset($this->children[$idx]);
    }
}