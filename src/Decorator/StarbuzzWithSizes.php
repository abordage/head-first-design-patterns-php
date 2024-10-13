<?php

declare(strict_types=1);

namespace Pattern\Decorator;

// php src/Decorator/StarbuzzWithSizes.php

require 'vendor/autoload.php';

use Pattern\Decorator\StarbuzzWithSizes\Beverage;
use Pattern\Decorator\StarbuzzWithSizes\DarkRoast;
use Pattern\Decorator\StarbuzzWithSizes\Espresso;
use Pattern\Decorator\StarbuzzWithSizes\HouseBlend;
use Pattern\Decorator\StarbuzzWithSizes\Mocha;
use Pattern\Decorator\StarbuzzWithSizes\Size;
use Pattern\Decorator\StarbuzzWithSizes\Soy;
use Pattern\Decorator\StarbuzzWithSizes\Whip;
use Pattern\Utils\Console;

class StarbuzzWithSizes
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
        $this->beverage->setSize(Size::GRANDE);

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
        $this->beverage->setSize(Size::VENTI);
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

(new StarbuzzWithSizes())->run();
