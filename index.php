<?php

require_once __DIR__ . '/vendor/autoload.php';

use Components\Character;
use Components\Decorators\BorderDecorator;
use Components\Decorators\ScrollerDecorator;
use Components\Polygon;
use Components\Row;
use Compositors\ArrayCompositor;
use Compositors\SimpleCompositor;

// Declarations
$cursor_event = new CursorEvent();
$kde_window = new KdeWindow($cursor_event);
$cursor_pointer = new CursorPointer($kde_window);

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
$row->Draw($kde_window);

dump('RERENDER...');

$character->setCompositor($simple_compositor);

$row->Draw($kde_window);