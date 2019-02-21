<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 11.02.2019
 * Time: 13:23
 */


//Создать класс город, и придумать несколько свойств(сколько посчитаешь нужным), а затем создать несколько объектов(городов) из этого класса
// Придумать для каждого из шести созданных классов, какие-то  методы, которые что-то будут делать. Что конкретно они будут делать, на твоё усмотрение

class city
{
    public $name;
    public $index;
    public $road;
    public $street;
    public $job ;
    public $business;



    public function streetStatus ()
    {

        if ($this->street == 'bad')
        {
            echo $this->name. ' - Плохой город<br>';
        }
        else
        {
            ($this->street ==  'good'); //лишнее, так как в первом блоке if мы проверили что свойство street не равно bad
            echo $this->name. ' - Хороший город<br>';
        }


    }
    public function lives ()
    {
        if($this->business == true)
        {
            echo 'Я могу жить в этом городе<br>';
        }elseif ($this->job <= 2500)
        {
            echo  'Я не могу жить в этом городе.<br>';
        }
        else{
            echo 'Бизнеса нет, но есть достойная заработная плата, поэтому я могу жить в этом городе. <br>';
        }

    }



}



//$cahul = new city();
//$cahul->name = 'Кагул';
//$cahul->index =1221313132;
//$cahul->road = 150;
//$cahul->street = 'good';
//$cahul->job = 25011;
//$cahul->business = false;
//echo $cahul->name. ' - ';
//$cahul->streetStatus();
//$cahul->lives();
//Пример с выводом информации о городе и выводом его имени, я перевел в функцию, поэтому смотри на работу с вторым объектом $vulcanesti

$vulcanesti = new city();
$vulcanesti->name = 'Вулканешты';
$vulcanesti->index = 4565465;
$vulcanesti->road = 99;
$vulcanesti->street = 'bad';
$vulcanesti->job = 2490;
$vulcanesti->business = false;
$vulcanesti->streetStatus();
$vulcanesti->lives();


