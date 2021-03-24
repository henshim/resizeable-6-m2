<?php

include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');

$hinhs[0]=new Circle('circle',3);
$hinhs[1]=new Rectangle('rectangle',6,5);
$hinhs[2]=new Square('square',15);

foreach ($hinhs as $hinh ){
    echo 'diện tích '.$hinh->name.' trước khi tăng: '.$hinh->calculateArea().'<br>';
    echo 'diện tích '.$hinh->name.' sau khi tăng: '.$hinh->resize(20).'<br>';
}
/*$circle = new Circle('Circle 01', 8);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3, 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3, 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4, 4, 4);
echo 'Square area: ' . $square->calculateArea() . '<br />';
echo 'Square perimeter: ' . $square->calculatePerimeter() . '<br />';*/
