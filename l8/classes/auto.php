<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 22.02.2019
 * Time: 13:30
 */

class auto
{
    public $name;
    public $doors ;
    public $wheels ;
    public $steeringWheel;
    public $color;
    public $tankEnd = ' у вас нет топлива';
    public $gasTank;


    public function __construct($name,$color,$doors,$wheels,$steeringWheel)
    {
        $this->name = $name;
        $this->color = $color;
        $this->doors = $doors;
        $this->wheels = $wheels;
        $this->steeringWheel = $steeringWheel;

    }

    /**
     * Машина может ехать
     */
    public function ride()
    {

      if($this->gasTank >0 and $this->gasTank <=5 )
      {
            echo $this->name. ' можно ехать, но скоро закончится топливо';
      }elseif ($this->gasTank > 5)
      {
          echo $this->name. ' можно свободно ехать';
      }
        else
            echo $this->tankEnd;
    }

    /**
     * Машина может перевозить
     */
    public function transport()

    {


    }

    /**
     * Машина может сломаться
     */
    public function crash()
    {

    }







}