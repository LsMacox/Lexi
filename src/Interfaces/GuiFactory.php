<?php

namespace Interfaces;

use Interfaces\Factory\Button;
use Interfaces\Factory\Menu;
use Interfaces\Factory\ScrollBar;
use Interfaces\Factory\Window;

/* @pattern Factory */
interface GuiFactory
{
    public function createScrollBar(): ScrollBar;
    public function createButton(): Button;
    public function createMenu(): Menu;
    public function createWindow(Event $event): Window;
}