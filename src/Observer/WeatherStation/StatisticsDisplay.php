<?php

namespace Pattern\Observer\WeatherStation;

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
        echo "Avg/Max/Min temperature = " . ($this->tempSum / $this->numReadings) . "/" . $this->maxTemp . "/" . $this->minTemp . "\n";
    }
}
