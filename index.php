<?php

require_once __DIR__ . '/vendor/autoload.php';

use Components\Character;
use Components\Decorators\BorderDecorator;
use Components\Decorators\ScrollerDecorator;
use Components\Polygon;
use Components\Row;
use Compositors\ArrayCompositor;
use Compositors\SimpleCompositor;
use Factory\KdeGuiFactory;
use Windows\ApplicationWindow;

// Factory
$os = 'kde';
$gui_factory = null;
if (str_contains($os, 'kde')) {
    $gui_factory = new KdeGuiFactory();
}
putenv('WINDOW_MANAGER=pm');

// Declarations
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
$row->Draw($window = new ApplicationWindow($row));

dump('');
dump('RERENDER...');
dump('');

$character->setCompositor($simple_compositor);

$row->Draw($window);