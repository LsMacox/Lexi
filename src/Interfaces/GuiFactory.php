<?php

namespace Interfaces;

use Interfaces\GuiFactory\GuiScrollBar;
use Interfaces\GuiFactory\GuiButton;
use Interfaces\GuiFactory\GuiMenu;

/* @pattern Factory */
interface GuiFactory
{
    public function createScrollBar(): GuiScrollBar;
    public function createButton(): GuiButton;
    public function createMenu(): GuiMenu;
}