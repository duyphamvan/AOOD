<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 04:04
 */
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');

class Orange extends Fruit
{
    public function howToEat()
    {
        return "Orange could be juiced";   // TODO: Implement howToEat() method.
    }
}