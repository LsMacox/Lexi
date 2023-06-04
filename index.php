<?php

require_once __DIR__ . '/vendor/autoload.php';

use Components\Character;
use Components\Decorators\BorderDecorator;
use Components\Decorators\ScrollerDecorator;
use Components\Polygon;
use Components\Row;
use Compositors\ArrayCompositor;
use Compositors\SimpleCompositor;
use Factory\KdeFactory;

// Factory
$os = 'linux';
$gui_factory = null;
if (str_contains($os, 'linux')) {
    $gui_factory = new KdeFactory();
}

// Declarations
$cursor_event = new CursorEvent();
$window = $gui_factory->createWindow($cursor_event);
$cursor_pointer = new CursorPointer($window);

$array_compositor = new ArrayCompositor();
$simple_compositor = new SimpleCompositor();

$row = new Row();
$row = new BorderDecorator($row);
$row = new ScrollerDecorator($row);

$character = new Character();
$character->setCompositor($array_compositor);
$polygon = new Polygon();
$character->Insert($polygon);

// Initialization
$row->Insert($character);
$row->Insert($polygon);
$row->Draw($window);

dump('RERENDER...');

$character->setCompositor($simple_compositor);

$row->Draw($window);