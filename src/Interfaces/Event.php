<?php

namespace Interfaces;

interface Event
{
    public function emit(): void;
    public function event(): array;
}