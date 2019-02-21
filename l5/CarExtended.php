<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 18:20
 */

class Car
{
    public $model;
    public $name;
    public $color;
    public $wheels = 4;
    public $gasCapacity = 0;

    public $isMoving = false;
    public $isDestroyed = false;
    public $probeg = 0;


    /**
     * ћетод который двигает нашу машину на 10 метров вперЄд
     * ѕри этом задает свойству $this->isMoving значение true, так как наша машина в данный момент находитс€ в состо€нии движени€
     * ѕосле к свойству $this->probeg плюсуетс€ цифра 10, что говорит о том что общий пробег нашей машины увеличилс€ на 10 метров
     * ѕосле мы выводим на экран информацию о том что наша машина проехала 10 метров.
     */
    public function move()
    {
        //$this эта переменна€ указывает на объект который будет создан из этого класса
        //по сути указывает что мы обращаемс€ к тому объекту в котором сейчас пишем эту переменную.

        if ($this->gasCapacity < 1)
        {
            $this->stop();
            echo "Ќе хватает топлива";
            return 1;
        }
        $this->isMoving = true;
        $this->probeg = $this->probeg  + 10;
        $this->gasCapacity -= 10;

        echo 'ћашина проехала 10 метров <br>';

    }

    /**
     * Ётот метод класса Car останавливает машину
     * ј так же мен€ет значение свойства $this->isMoving на false так как машина больше не находитьс€ в состо€нии движени€
     */
    public function stop()
    {
        $this->isMoving = false;
        echo 'ћашина остановилась <br>';
    }

    /**
     * Ётот метод ставит свойству $this->isDestroyed значение true, что говорит о том что наша машина сломалана
     */
    public function destroyCar()
    {
        $this->isDestroyed = true;
        echo 'ћашина сломалась <br>';
    }

    /**
     * Ётот метод выводит информацию о том, в каком состо€нии находитс€ машина, едет в текущий момент или нет.
     */
    public function currentStatus()
    {
        if ($this->isMoving == true)
        {
            echo 'ћашина сейчас едет<br>';
        }else{
            echo 'ћашина не едет<br>';
        }
        echo 'Ѕензина осталось '. $this->gasCapacity . '<br>';

    }
}

$audi = new Car();
$audi->name = 'A4';
$audi->model = 'Audi';
$audi->color = 'Red';
$audi->gasCapacity = 40;




$audi->move();
$audi->move();
$audi->move();
$audi->move();
$audi->stop();
echo  $audi->currentStatus() . '<br>';

$audi->move();
