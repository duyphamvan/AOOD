<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 03:35
 */
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Edible.php');
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck";// TODO: Implement makeSound() method.
    }

    public function howToEat()
    {
        return "could be fried";
    }
}