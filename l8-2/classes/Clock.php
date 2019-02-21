<?php

/**
 * Class Clock
 * Класс описывающий часы
 */

class Clock
{
    public $color;
    public $weight;
    public $type = 'mech';
    public $errorMessage = 'Нет заряда';
    public $name;
    public $model;
    //Модификатор доступа protected позволяет получить доступ к свойству или методу с таким же модификатором доступа только классу наследнику, но не созданным объектам
    protected $charge = 100;



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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Метод выводящий информацию; модель и название часов
     */

    public function clockInfo()
    {
        echo 'Эта модель часов '.$this->getModel() . ' - '.$this->getName();
    }



}
