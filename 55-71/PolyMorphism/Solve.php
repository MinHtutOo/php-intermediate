<?php
require_once "vendor\autoload.php";
use caculate\Circle;
use caculate\Square;
use caculate\gem\Shape;


class Solve
{
    public function __construct()
    {
        $circle = new Circle(2);
        $this->getPrice($circle);

        $square = new Square(5,10);
        $this->getPrice($square);
    }

    public function getPrice(Shape $shape)
    {
        $area = $shape->getArea();
        echo "Your total price is " . "$ " . ($area * 15) . "<hr>";
    }
}

$sol = new Solve();

?>