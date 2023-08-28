<?php

class Rectangle implements Calc
{
    private int|float $Size1;
    private int|float $Size2;

    function __construct()
    {
        echo 'We are calculating rectangle'.PHP_EOL;
    }

    public function Setter(float|int $Size1, float|int $Size2): void
    {
        $this->Size1 = $Size1;
        $this->Size2 = $Size2;
    }

    public function Perimeter(): float|int
    {
        return (2 * $this->Size1 + 2 * $this->Size2);
    }

    public function Square(): float|int
    {
        return $this->Size1 * $this->Size2;
    }
}