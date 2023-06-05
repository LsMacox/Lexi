<?php

namespace Abstractions;

use Factory\PMWindowSystemFactory;
use Factory\XWindowSystemFactory;
use Interfaces\WindowSystemFactory\WindowImp;

/** @pattern bridge */
abstract class Window
{
    protected Glyph $glyph;
    protected WindowImp $imp;

    public function __construct(Glyph $glyph)
    {
        if (getenv('WINDOW_MANAGER') == 'pm') {
            $window_system_factory = new PMWindowSystemFactory();
        } else {
            $window_system_factory = new XWindowSystemFactory();
        }

        $this->glyph = $glyph;
        $this->imp = $window_system_factory->createWindowImp();
    }

    public function Redraw(): void
    {
        $this->glyph->Draw($this);
    }

    public function DrawRect(int $x0, int $y0, int $x1, int $y1): void
    {
        $this->imp->DeviceRect(new \CoordinatesParams($x0, $y0, $x1, $y1));
    }

    abstract public function DrawPolygon(int $width, int $height): void;
    abstract public function DrawText(string $text): void;

    abstract public function Raise(): void;
    abstract public function Lower(): void;
    abstract public function Iconify(): void;
    abstract public function Deiconify(): void;
}