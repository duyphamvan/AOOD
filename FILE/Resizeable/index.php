<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circles[0] = new Circle('Circle 01', 3);

$circles[1] = new Cylinder('Cylinder 01', 3 , 4);

$circles[2] = new Rectangle('Rectangle 01', 3 , 4);

$circles[3] = new Square('Square 01', 4 , 4);

foreach ($circles as $circle){
    echo 'Begin Area: '.$circle->calculateArea().'<br>';
    echo 'After Area: '.$circle-> resize(rand(1, 100)).'<br>'.'<hr>';
}