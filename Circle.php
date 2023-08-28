<?php

class Circle implements Calc
{
    private int|float $Radius;
    function __construct()
    {
        echo 'We are calculating circle'.PHP_EOL;
    }
    public function Setter(float|int $a): void
    {
        $this->Radius = $a;
    }

    public function Perimeter(): float|int
    {
        return pi() * $this->Radius;
    }

    public function Square(): float|int
    {
        return pi() * $this->Radius ** 2;
    }
}