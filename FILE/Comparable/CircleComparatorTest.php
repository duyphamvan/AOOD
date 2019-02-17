<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 06:02
 */
include "CircleComparator.php";
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
echo ($circleComparator->compareTo($circleOne, $circleTwo));