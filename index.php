<?php
enum Shape: string
{
    case circle = 'circle';
    case rectangle = 'rectangle';
}
interface Calc
{
    public function Perimeter(): int|float;

    public function Square(): int|float;
}
class Circle implements Calc
{
    private int|float $Radius;

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
class CircleCalc extends Circle
{
    function __construct()
    {
        echo 'We are calculating circle'.PHP_EOL;
    }
}
class Rectangle implements Calc
{
    private int|float $Size1;
    private int|float $Size2;

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
class RectangleCalc extends Rectangle
{
    function __construct()
    {
        echo 'We are calculating rectangle'.PHP_EOL;
    }
}
echo 'Enter one shape of next shape: circle or rectangle: ';
$Shape = readline();
switch ($Shape) {
    case Shape::circle->value :
        $ObjCircle = new CircleCalc();
        echo 'Enter radius: ';
        $Radius = readline();
        $ObjCircle->Setter($Radius);
        echo "Circumference of circle: " . round($ObjCircle->Perimeter(), 1) . PHP_EOL;
        echo "Square of circle: " . round($ObjCircle->Square(), 1);
        break;
    case Shape::rectangle->value :
        $ObjRect = new RectangleCalc();
        echo 'Enter two side' . PHP_EOL;
        echo 'Side 1' . PHP_EOL;
        $Side1 = readline();
        echo 'Side 2' . PHP_EOL;
        $Side2 = readline();
        $ObjRect->Setter($Side1,$Side2);
        echo "Perimeter of rectangle: " . round($ObjRect->Perimeter(), 1) . PHP_EOL;
        echo "Square of rectangle: " . round($ObjRect->Square(), 1);
        break;
    default:
        echo "Incorrect shape or this shape absent in our list";
}
echo PHP_EOL;