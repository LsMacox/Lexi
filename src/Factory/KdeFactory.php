<?php

namespace Factory;

use Factory\Kde\KdeButton;
use Factory\Kde\KdeMenu;
use Factory\Kde\KdeScrollBar;
use Factory\Kde\KdeWindow;
use Interfaces\Event;
use Interfaces\Factory\Button;
use Interfaces\Factory\Menu;
use Interfaces\Factory\ScrollBar;
use Interfaces\Factory\Window;
use Interfaces\GuiFactory;

class KdeFactory implements GuiFactory
{
    public function __construct()
    {
        dump('KDE FACTORY');
    }

    public function createScrollBar(): ScrollBar
    {
        return new KdeScrollBar();
    }

    public function createButton(): Button
    {
        return new KdeButton();
    }

    public function createMenu(): Menu
    {
        return new KdeMenu();
    }

    public function createWindow(Event $event): Window
    {
        return new KdeWindow($event);
    }
}