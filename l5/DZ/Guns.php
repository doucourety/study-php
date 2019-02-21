<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 10.02.2019
 * Time: 17:54
 */
//Создать класс оружия, и придумать несколько свойств(сколько посчитаешь нужным), а затем создать несколько объектов(оружия) из этого класса
//Придумать для каждого из шести созданных классов, какие-то  методы, которые что-то будут делать. Что конкретно они будут делать, на твоё усмотрение
class Guns
{
    public $name;
    public $color;
    public $magazine;
    public $shotInSeconds;
    public $recharge;
    public $incMag = 40;
    public $isPrevent = true;



    public function mag()
    {
        if ($this->incMag >= 30 )
        {
            echo $this->name. ' у вас увеличенный магазин<br>';
        }else
        {
            ($this->incMag < 35 );

            echo $this->name. ' у вас 30 или меньше патронов<br>';
        }
    }
    public function shot()
    {
        if ($this->isPrevent == true)
        {
            return;
        }
        $this->magazine =$this->magazine -1;
    }

    public function preventer()
    {
        if ($this->isPrevent == false)
        {
            $this->isPrevent = true;
        }else
            {
                $this->isPrevent = false;
            }
    }

    public function magStatus()
    {
        echo 'Патронов осталось '. $this->magazine. '<br>';
    }






}
$karyak = new Guns();
$karyak->name = 'Каряк';
$karyak->color = 'black';
$karyak->magazine = 5;
$karyak->shotInSeconds = 1;
$karyak->recharge = 3;
$karyak->incMag = false;
$karyak->preventer();
$karyak ->mag();
$karyak->shot();
$karyak->shot();
$karyak->shot();
$karyak->shot();
$karyak->magStatus();






$tommyGun = new Guns();
$tommyGun->name = 'Томми';
$tommyGun->color = 'gray';
$tommyGun->magazine = 50;
$tommyGun->shotInSeconds = 10;
$tommyGun->recharge = 2;
$tommyGun->preventer();
$tommyGun->mag();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->magStatus();
$tommyGun->preventer();


$microUzi = new Guns();
$microUzi->name = 'Узи';
$microUzi->color = 'orange';
$microUzi->magazine = 25;
$microUzi->shotInSeconds = 15;
$microUzi->recharge = 2;
$microUzi->mag();
$microUzi->preventer();
$microUzi->shot();
$microUzi->magStatus();


