<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 10.02.2019
 * Time: 13:09
 */
//Создать класс машины, и придумать несколько свойств(сколько посчитаешь нужным), а затем создать несколько объектов(машин) из этого класса
//Придумать для каждого из шести созданных классов, какие-то  методы, которые что-то будут делать. Что конкретно они будут делать, на твоё усмотрение
class Cars
{
    public $weight;
    public $height;
    public $color;
    public $speed;
    public $model;
    public $tank;

    public function model ()
    {
        echo 'Машина под названием '. $this->model. ', цвета '.$this->color. '<br>';

    }
    public function speed()
    {
        if($this->speed > 200)
        {
            echo 'Хорошая машина<br> ';
        }

        else
        {($this->speed <= 400 );
            echo 'Слабая машина<br>';
        }

    }
    public function tank()
    {
        if ($this->tank > 65)

        {
            echo 'Нужна канистра<br>';
        }
        else
            { ($this->tank <= 60);

            echo 'Можно ехать<br>';
            }


    }
}


$bmw = new Cars();
$bmw->weight = 1200;
$bmw->height = 1.5;
$bmw->color = 'blue';
$bmw->model = 'BMW';
$bmw->speed = 180;
$bmw->tank = 70;

$bmw-> model();
$bmw->speed();
$bmw->tank();
echo '<br>';



$audi = new Cars();
$audi->weight = 1000;
$audi->height = 1.2;
$audi->color = 'red';
$audi->model = 'audi';
$audi->speed = 320;
$audi->tank = 65;

$audi->model();
$audi->speed();
$audi->tank();

$opel = new Cars();
$opel->weight = 2000;
$opel->height = 1.7;
$opel->color = 'green';
$opel->model = 'OPEL';
$opel->speed = 180;
$opel->tank = 50;

$opel->model();
$opel->speed();
$opel->tank();

