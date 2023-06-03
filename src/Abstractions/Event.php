<?php

namespace Abstractions;
abstract class Event
{
    abstract public function getCoordinates(): array;
}