<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 05:56
 */

include 'Circle.php';
include 'Comparable.php';
class CircleComparator  implements Comparable
{
    public function compareTo($circleOne, $circleTwo)
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
}
}