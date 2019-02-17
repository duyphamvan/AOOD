<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 04:34
 */
include "ComparableCircle.php";
$circles[0] = new ComparableCircle('circleOne',8);
$circles[1] = new ComparableCircle('circleTwo', 2);
$circles[2] = new ComparableCircle('circleThree', 4);
echo ('Pre-sorted: <br>');
foreach ($circles as $circle){
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}

sort($circles);

echo ('After-sorted: <br>');
foreach ($circles as $circle) {
    echo ('name: ' . $circle->getName() . ', radius: ' . $circle->getRadius() . '<br>');
}