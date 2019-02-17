<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 03:18
 */
include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";// TODO: Implement makeSound() method.
    }
}