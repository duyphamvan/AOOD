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

$shapes[0] = new Circle('Circle', 3);


$shapes[1] = new Cylinder('Cylinder', 3 , 4);


$shapes[2] = new Rectangle('Rectangle', 3 , 4);


$shapes[3] = new Square('Square', 4 , 4, 4);

foreach ($shapes as $shape){
    if ($shape instanceof Colorable){
        echo 'Colorable: '.'<br/>';
        echo 'Name: '.$shape->name.'<br/>';
        echo $shape->howToColor().'<br/>';
        echo 'Area: '.$shape->calculateArea().'<br/>'.'<hr/>';
    } else{
        echo 'Not colorble'.'<br/>';
        echo 'Name: '.$shape->name.'<br/>';
        echo 'Area: '.$shape->calculateArea().'<br/>'.'<hr/>';
    }
}