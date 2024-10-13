<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

use Pattern\Utils\Console;

class StatisticsDisplay implements Observer, DisplayElement
{
    private float $maxTemp = 0.0;

    private float $minTemp = 200;

    private float $tempSum = 0.0;

    private int $numReadings = 0;

    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(): void
    {
        $temperature = $this->weatherData->getTemperature();

        $this->tempSum += $temperature;
        $this->numReadings++;

        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }

        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }

        $this->display();
    }

    public function display(): void
    {
        $message = sprintf(
            'Avg/Max/Min temperature = %s/%s/%s',
            $this->tempSum / $this->numReadings,
            $this->maxTemp,
            $this->minTemp,
        );

        Console::getInstance()->line($message);
    }
}
