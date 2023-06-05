<?php

namespace Factory;

use Factory\Gui\KdeGuiButton;
use Factory\Gui\KdeGuiMenu;
use Factory\Gui\KdeGuiScrollBar;
use Interfaces\GuiFactory\GuiButton;
use Interfaces\GuiFactory\GuiMenu;
use Interfaces\GuiFactory\GuiScrollBar;
use Interfaces\GuiFactory;

class KdeGuiFactory implements GuiFactory
{
    public function __construct()
    {
        dump(__CLASS__ . ': [CREATE]');
    }

    public function createScrollBar(): GuiScrollBar
    {
        return new KdeGuiScrollBar();
    }

    public function createButton(): GuiButton
    {
        return new KdeGuiButton();
    }

    public function createMenu(): GuiMenu
    {
        return new KdeGuiMenu();
    }
}