<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

interface DisplayElement
{
    public function display(): void;
}
