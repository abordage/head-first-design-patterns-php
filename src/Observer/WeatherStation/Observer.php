<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

interface Observer
{
    public function update(): void;
}
