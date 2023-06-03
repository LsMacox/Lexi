<?php

namespace Abstractions;
abstract class Point
{
    abstract public function getCoordinateX(): int;

    abstract public function getCoordinateY(): int;
}