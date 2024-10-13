<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

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
        echo "Forecast: ";
        if ($this->currentPressure > $this->lastPressure) {
            echo "Improving weather on the way!\n";
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo "More of the same\n";
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo "Watch out for cooler, rainy weather\n";
        }
    }
}
