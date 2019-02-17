<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 28/01/2019
 * Time: 03:38
 */
include('Animals/Chicken.php');
include('Animals/Tiger.php');
include('Fruits/Apple.php');
include('Fruits/Orange.php');

echo ('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();
//var_dump($animals);
foreach ($animals as $animal) {
    echo $animal->makeSound(). '<br>';

    if ($animal instanceof Chicken){
        echo $animal->howToEat();
    }
}
echo '<br>';
echo ('---- Fruits<br>');

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}