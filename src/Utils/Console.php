<?php

declare(strict_types=1);

namespace Pattern\Utils;

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class Console
{
    private static ?Console $instance = null;

    protected OutputInterface $outputInterface;

    private function __construct()
    {
        $this->outputInterface = new ConsoleOutput();
    }

    public static function getInstance(): Console
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function print(string $text, string $color): string
    {
        return $this->line(sprintf('<fg=%s>%s</>', $color, $text));
    }

    public function write(string $text): string
    {
        $this->outputInterface->write($text);

        return $text;
    }

    public function line(string $text = ''): string
    {
        $this->outputInterface->writeln($text);

        return $text;
    }

    public function green(string $text): string
    {
        return $this->print($text, 'green');
    }

    public function cyan(string $text): string
    {
        return $this->print($text, 'cyan');
    }

    public function magenta(string $text): string
    {
        return $this->print($text, 'magenta');
    }

    public function yellow(string $text): string
    {
        return $this->print($text, 'yellow');
    }

    public function red(string $text): string
    {
        return $this->print($text, 'red');
    }
}
