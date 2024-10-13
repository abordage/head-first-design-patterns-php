<?php

declare(strict_types=1);

namespace Pattern\Decorator;

// php src/Decorator/Starbuzz.php

require 'vendor/autoload.php';

use Pattern\Decorator\Starbuzz\Beverage;
use Pattern\Decorator\Starbuzz\DarkRoast;
use Pattern\Decorator\Starbuzz\Espresso;
use Pattern\Decorator\Starbuzz\HouseBlend;
use Pattern\Decorator\Starbuzz\Mocha;
use Pattern\Decorator\Starbuzz\Soy;
use Pattern\Decorator\Starbuzz\Whip;
use Pattern\Utils\Console;

class Starbuzz
{
    private Beverage $beverage;

    public function run(): void
    {
        $this->makeEspresso();
        $this->makeDarkRoast();
        $this->makeHouseBlend();
    }

    private function makeEspresso(): void
    {
        $this->beverage = new Espresso();

        $this->output();
    }

    private function makeDarkRoast(): void
    {
        $this->beverage = new DarkRoast();
        $this->beverage = new Mocha($this->beverage);
        $this->beverage = new Mocha($this->beverage);
        $this->beverage = new Whip($this->beverage);

        $this->output();
    }

    private function makeHouseBlend(): void
    {
        $this->beverage = new HouseBlend();
        $this->beverage = new Soy($this->beverage);
        $this->beverage = new Mocha($this->beverage);
        $this->beverage = new Whip($this->beverage);

        $this->output();
    }

    private function output(): void
    {
        $price = $this->beverage->cost() / 100;
        Console::getInstance()->cyan(sprintf('%s: $%s', $this->beverage->getDescription(), $price));
    }
}

(new Starbuzz())->run();
