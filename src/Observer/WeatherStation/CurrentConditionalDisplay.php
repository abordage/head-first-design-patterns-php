<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

use Pattern\Utils\Console;

class CurrentConditionalDisplay implements Observer, DisplayElement
{
    private float $temperature;

    private float $humidity;

    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(): void
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        $message = sprintf('Current conditions: %sF degrees and %s %% humidity', $this->temperature, $this->humidity);
        Console::getInstance()->line($message);
    }
}
