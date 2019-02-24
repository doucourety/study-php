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
    public $trueMessage = ['можно ехать, но скоро закончится топливо','можно свободно ехать','вы легковая машина','вы в рабочем состоянии'];
    public $errorMessage = ['заправьте машину','машина сломана','вы не можете поместить такое количество людей'];
    public $place = 8;
    private $gasTank;
    public $state ;



    public function __construct($name,$color,$doors,$wheels,$steeringWheel,$gasTank,$place,$state)
    {
        $this->name = $name;
        $this->color = $color;
        $this->doors = $doors;
        $this->wheels = $wheels;
        $this->steeringWheel = $steeringWheel;
        $this->gasTank = $gasTank;
        $this->place = $place;
        $this->state = $state;

    }

    /**
     * Машина отоброжающий топливо в машине
     */
    public function ride()
    {

      if($this->gasTank >0 and $this->gasTank <=5 )
      {
             $this->trueMsg(0);

      }elseif ($this->gasTank > 5)
      {
             $this ->trueMsg(1);
      }
        else
             $this->displayInfo(0);
    }


    /**
     * Метод отоброжайющий местность машины
     */
    public function transport()

    {
        if ($this->place < 7 )
        {
            $this->trueMsg(3);
        }else
             $this->displayInfo(2);


    }

    /**
     * Метод показывающий состояние машины
     */
    public function crashStatus()
    {
        if ($this->state == true)
        {
            $this->trueMsg(4);
        }else
            $this->displayInfo(1);


    }

    public function displayInfo($errCode)
    {
        echo $this->name. ' '. $this->errorMessage[$errCode];
    }

    public function trueMsg($trueMsg)
    {
        echo $this->name.' '.$this->trueMessage[$trueMsg];
    }




}


