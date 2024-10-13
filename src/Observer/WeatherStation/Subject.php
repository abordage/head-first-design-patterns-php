<?php

declare(strict_types=1);

namespace Pattern\Observer\WeatherStation;

interface Subject
{
    public function registerObserver(Observer $observer): void;

    public function removeObserver(Observer $observer): void;

    public function notifyObserver(): void;
}
