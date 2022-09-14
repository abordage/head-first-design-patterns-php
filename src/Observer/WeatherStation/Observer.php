<?php

namespace Pattern\Observer\WeatherStation;

interface Observer
{
    public function update(): void;
}
