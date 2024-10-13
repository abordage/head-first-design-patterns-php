<?php

declare(strict_types=1);

namespace Pattern\Observer;

// php src/Observer/WeatherStation.php

require 'vendor/autoload.php';

use Pattern\Observer\WeatherStation\CurrentConditionalDisplay;
use Pattern\Observer\WeatherStation\ForecastDisplay;
use Pattern\Observer\WeatherStation\HeatIndexDisplay;
use Pattern\Observer\WeatherStation\StatisticsDisplay;
use Pattern\Observer\WeatherStation\WeatherData;
use Pattern\Utils\Console;

readonly class WeatherStation
{
    public function __construct(private WeatherData $weatherData)
    {
        new CurrentConditionalDisplay($this->weatherData);
        new StatisticsDisplay($this->weatherData);
        new HeatIndexDisplay($this->weatherData);
        new ForecastDisplay($this->weatherData);
    }

    public function run(): void
    {
        $this->weatherData->setMeasurements(80, 65, 30.4);
        Console::getInstance()->line();

        $this->weatherData->setMeasurements(82, 70, 29.2);
        Console::getInstance()->line();

        $this->weatherData->setMeasurements(78, 90, 29.2);
    }
}

(new WeatherStation(new WeatherData()))->run();
