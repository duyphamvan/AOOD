<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 04:02
 */
include_once(dirname(__FILE__) . '/../AbstractClass/Fruits.php');
class Apple extends Fruit
{
    public function howToEat()
    {
        return "Apple could be slided";// TODO: Implement howToEat() method.
    }
}