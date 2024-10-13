<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

class WeatherData implements Subject
{
    private array $observers = [];

    private float $temperature;

    private float $humidity;

    private float $pressure;

    public function registerObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer): void
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObserver(): void
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof Observer) {
                $observer->update();
            }
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObserver();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}
