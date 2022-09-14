<?php

namespace Pattern\Observer\WeatherStation;

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
        echo "Current conditions: $this->temperature F degrees and $this->humidity% humidity\n";
    }
}
