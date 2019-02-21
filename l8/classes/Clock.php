<?php

/**
 * Class Clock
 * Класс описывающий часы
 */

class Clock
{
    public $color;
    public $weight;
    public $time;
    public $type = 'mech';
    public $errorMessage = 'Нет заряда';

    private $charge;


    public function __construct($color, $weight, $time, $type, $charge)
    {
        $this->time = $time;
        $this->color = $color;
        $this->weight = $weight;
        $this->type = $type;
        $this->charge = $charge;


        echo 'Объект создан<br>';
    }


    /**
     * Метод отображающий текущее время
     */
    public function displayTime()
    {

        if ($this->checkBattery() == true)
        {
            echo date('H:i:s', time()-3600).'<br>';
            $this->charge = $this->charge - 1;
        }else
            echo $this->errorMessage.'<br>';

    }

    /**
     * Метод заряда
     * @param $number int Увеличение заряда на это значение
     */
    public function doCharge($number)
    {
        $this->charge = $this->charge + $number;
    }

    /**
     * Метод отображающий текущую дату
     */
    public function displayDate()
    {
        if ($this->checkBattery() == true)
        {
            echo date('Y-m-d').'<br>';
            $this->charge = $this->charge - 1;
        }else
            echo $this->errorMessage.'<br>';

    }

    /**
     * Метод проверки уровня заряда. Вернет true если заряд есть, вернет false если заряда нет.
     * @return bool
     */
    public function checkBattery()
    {
        if ($this->charge > 0)
        {
            return true;
        }
        else return false;
    }


    /**
     *  Автоматически вызыватеся когда метод больше не используется или удален.
     */
    public function __destruct()
    {
        echo '<br>Объект уничтожен';
    }


}
