<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 04:24
 */

include "Circle.php";
//include "file.php";

class ComparableCircle extends Circle
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    /*public function compareTo($circleOne, $circleTwo)
    {
        $circleOneRadius = $circleOne->getRadius();// TODO: Implement compareTo() method.
        $circleTwoRadius = $circleTwo->getRadius();// TODO: Implement compareTo() method.
        if ($circleOneRadius > $circleTwoRadius){
            return 1;
        } else if ($circleOneRadius < $circleTwoRadius){
            return -1;
        } else {
            return 0;
        }
    }*/
}