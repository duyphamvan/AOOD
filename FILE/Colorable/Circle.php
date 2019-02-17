<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:14
 */
include_once ('Shape.php');
include_once ('Colorable.php');

class Circle extends Shape implements Colorable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function howToColor()
    {
        return 'Color all four sides';// TODO: Implement howToColor() method.
    }
}