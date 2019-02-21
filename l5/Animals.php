<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 17:59
 */

/**
 * Class Cat
 * ќбъ€вление класса Cat
 */
class Cat
{
    public $name = 'Pupsik';
    public $color = 'Gray';
    public $weight = 3;
    public $tail;

    private $brain = 0.3;
}
$cat = new Cat();
echo  $cat->name .'<br>';

$cat->name = 'Vasya';

echo $cat->tail;

/**
 * Class Dog
 * ќбъ€вили класс Dog, добавили ему список свойств, а так же пару методов. *
 */
class Dog
{
    /*
     * ќбъ€вление свойств
     */
    public $name = 'Sharik';
    public $color = 'black';
    public $age = 7;

    /*
     * ќбъ€вление методов
     */
    public function say()
    {
        echo 'Gav-gav';
    }

    public function bite()
    {
        echo ' усать';
    }


}

$dog = new Dog ();
echo 'ћоего пса зовут '. $dog->name . ', мой пЄс может поздороватьс€, Ўарик, голос! <br>';
$dog->say();
echo '<br>';
$dog->bite();


