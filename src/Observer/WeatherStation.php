<?php

// php src/Observer/WeatherStation.php

require 'vendor/autoload.php';

use Pattern\Observer\WeatherStation\CurrentConditionalDisplay;
use Pattern\Observer\WeatherStation\ForecastDisplay;
use Pattern\Observer\WeatherStation\HeatIndexDisplay;
use Pattern\Observer\WeatherStation\StatisticsDisplay;
use Pattern\Observer\WeatherStation\WeatherData;

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionalDisplay($weatherData);
$statisticsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);
$heatIndex = new HeatIndexDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
$weatherData->setMeasurements(82, 70, 29.2);
$weatherData->setMeasurements(78, 90, 29.2);
