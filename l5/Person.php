<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 19:30
 */

class Person
{
    public $name;
    public $age;
    public $lastName;
    public $weight;
    public $height;
    public $address;

    public function sayHello()
    {
        echo 'Привет<br>';
    }
    public function say($string)
    {
        echo $this->name. ' говорит: '. $string. '<br>';
    }

    public function name()
    {
        echo 'Меня зовут '. $this->name . ' ' . $this->lastName . '<br>';
    }
}

class Address
{
    public $country;
    public $city;
    public $street;
    public $flat;
}
// -> объект->свойствоОбъекта
// -> объект->методОбъекта()

//Создаем объект класса Person и сохраняем объект в переменную $vakar
$vakar = new Person();
$vakar->name = 'Евгений';
$vakar->age = 26;
$vakar->lastName = 'Вакарчук';
$vakar->address = 'Ленина';

$vakar->sayHello();
$vakar->say('Раки');
$vakar->name();

//Создаем объект класса Person и сохраняем объект в переменную $maxim
$maxim = new Person();
$maxim->name = 'Максим';
$maxim->age = 26;
$maxim->lastName = 'Карп';
$maxim->weight = 80;
$maxim->height = 175;
//$maxim->address;

$maxim->address = new Address();
$maxim->address->country = 'Moldova';
$maxim->address->city = 'Vulcanesti';
$maxim->address->street = 'Tolstoi';
$maxim->address->flat = 8;

$maxim->sayHello();
$maxim->name();
$maxim->say('Руинеры');

$maxim->age = 27;
