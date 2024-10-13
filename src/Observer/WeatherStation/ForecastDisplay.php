<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

use Pattern\Utils\Console;

class ForecastDisplay implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;

    private float $lastPressure;

    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(): void
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $this->weatherData->getPressure();

        $this->display();
    }

    public function display(): void
    {
        $console = Console::getInstance();

        match (true) {
            $this->currentPressure > $this->lastPressure => $console->green('Improving weather on the way!'),
            $this->currentPressure < $this->lastPressure => $console->yellow('Watch out for cooler, rainy weather'),
            default => $console->cyan('More of the same'),
        };
    }
}
