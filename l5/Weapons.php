<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 18:53
 */
//weapon

class Weapon
{
    public $name;
    public $color;
    public $model;
    public $magazine = 30;
    public $shotsInSecond;
    public $recharge = 3;
    public $isPrevent = true;

    public function shot ()
    {
        if ($this->isPrevent == true )
        {
            //выход из метода
            return;
        }

        $this->magazine = $this->magazine -1;
    }

    public function preventer ()
    {
        if ($this->isPrevent == false)
        {
            $this->isPrevent = true;
        }else
        {
            $this->isPrevent = false;
        }
    }


    public function magazineStatus()
    {
        echo 'Патронов осталось '. $this->magazine .'<br>';
    }

}


$bizon = new Weapon();
$bizon->name = 'Бизон';
$bizon->color = 'Черный';
$bizon->model = 'A140';
$bizon->shotsInSecond = 10;
$bizon->preventer();
$bizon->magazineStatus();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->magazineStatus();
$bizon->preventer();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->shot();
$bizon->magazineStatus();
