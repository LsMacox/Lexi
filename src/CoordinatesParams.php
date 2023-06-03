<?php

use Abstractions\Params;

class CoordinatesParams implements Params
{
    protected int $x0;
    protected int $y0;
    protected int $x1;
    protected int $y1;

    public function __construct(int $x0, int $y0, int $x1, int $y1)
    {
        $this->x0 = $x0;
        $this->y0 = $y0;
        $this->x1 = $x1;
        $this->y1 = $y1;
    }

    public function get(): array
    {
        return [$this->x0, $this->y0, $this->x1, $this->y1];
    }
}