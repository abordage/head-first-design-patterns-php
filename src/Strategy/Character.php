<?php

// php src/Strategy/Character.php

require 'vendor/autoload.php';

use Pattern\Strategy\Character\BowAndArrowBehavior;
use Pattern\Strategy\Character\King;
use Pattern\Strategy\Character\KnifeBehavior;
use Pattern\Strategy\Character\Knight;
use Pattern\Strategy\Character\Queen;
use Pattern\Strategy\Character\SwordBehavior;
use Pattern\Strategy\Character\Troll;

$king = new King();
$queen = new Queen();
$troll = new Troll();
$knight = new Knight();

$king->fight();
$troll->fight();
$knight->setWeapon(new BowAndArrowBehavior());
$knight->fight();
$knight->setWeapon(new SwordBehavior());
$knight->fight();
$troll->setWeapon(new SwordBehavior());
$troll->fight();
$queen->setWeapon(new KnifeBehavior());
$queen->fight();
