<?php
require 'Circle.php';
require 'Rectangle.php';

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
echo 'Enter one shape of next shape: circle or rectangle: ';
$Shape = readline();
switch ($Shape) {
    case Shape::circle->value :
        $ObjCircle = new Circle();
        echo 'Enter radius: ';
        $Radius = readline();
        $ObjCircle->Setter($Radius);
        echo "Circumference of circle: " . round($ObjCircle->Perimeter(), 1) . PHP_EOL;
        echo "Square of circle: " . round($ObjCircle->Square(), 1);
        break;
    case Shape::rectangle->value :
        $ObjRect = new Rectangle();
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