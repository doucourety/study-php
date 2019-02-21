<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 09.02.2019
 * Time: 20:25
 */

class Bird
{
    public $name;
    public $color;
    public $weight;
    public $beak;

    public function name ()
    {
        echo 'Мою птицу зовут '.$this->name.'<br>';
    }
    public function say ($string)
    {
        echo 'Моя птица под именем '.$this->name. ' каждое утро будит меня звуком: '. $string. '<br>';
    }
    public function peckInfo ()
    {
        echo 'У нее очень острый '.$this->beak;
    }

    public function birdInfo()
    {

        echo '<br>';
        if ($this->weight > 60)
        {
            echo 'не ну '. $this->name . ' крепкий малый';
        }else{
            echo 'не ну '. $this->name . ' хуууденькая';
        }
    }

}


$bird = new Bird();
$bird->name = 'Кеша';
$bird->color = 'yellow';
$bird->weight = 0.5;
$bird->beak = 'клюв';

$bird->name();
$bird->say('курлык');
$bird->peckInfo();
$bird->birdInfo();



$vorobeiJack = new Bird();
$vorobeiJack->name = 'Капитан, Джек Воробой';
$vorobeiJack->color = 'black';
$vorobeiJack->weight = 78;
$vorobeiJack->birdInfo();


$solovey = new Bird();
$solovey->name = 'Соловей Разбойник';
$solovey->color = 'red';
$solovey->weight = 103;
$solovey->birdInfo();
