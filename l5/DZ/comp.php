<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 11.02.2019
 * Time: 16:48
 */
class comp
{

    public $monitor;
    public $mouse;
    public $keyboard;
    public $ssd;
    public $graphicsCard;
    public $CPU;
    public $ram;
    public $hdd;
    public $price;
    public $price2 ;

    public function sayHello()
    {
        echo '������! ������ ������� ���������:<br> ';
    }
    public function aboutPC()
    {
        echo
            '� ��������� ���� ������� ����� '.$this->monitor.
            ', ���� '.$this->mouse.
            ', ���������� '.$this->keyboard.
            ',  ������� ���� '.$this->hdd.
            ' �������� ������� ������� ���� '.$this->ssd.
            ', ���������� '.$this->graphicsCard. ' ,
             ��������� '.$this->CPU.
            ', ����������� ������ '. $this->ram. '.<br>';
    }
    public function price ()
    {
        echo ($this->price + $this->price2).' ����<br>';
    }
    public function whichOne()
    {
        if ($this->price+$this->price2 <= 1400)
        {
            echo '������ ���������, �� ���� �����<br>';
        }else
        {
            ($this->price+$this->price2 > 1400 ); // ��� ������ ������, �� ��� ����� ��� ���� ������ ��� 1400 ��� ��� ������ ���� if �� �������� ����� ��������� false
            echo '������ ���������, ������� ������ ��� ����� �� � ����� � �����<br>';
        }
    }


}

$lenovo = new comp();
$lenovo->monitor = 'LG';
$lenovo->mouse = 'Razer';
$lenovo->keyboard = 'Hyperx';
$lenovo->ssd = 'Kingston 128gb';
$lenovo->graphicsCard = 'Nvidia GTX 1060 TI';
$lenovo->CPU = "Core i7";
$lenovo->ram = 'Kingston 16gb';
$lenovo->hdd = '1tb';
$lenovo->price = 750;
$lenovo->price2 = 750;
$lenovo->sayHello();
$lenovo->aboutPC();
$lenovo->price();
$lenovo->whichOne();



echo '� ����� �� ������� ������� ���������:<br>';
$dell = new comp();
$dell->monitor = 'Dell';
$dell->mouse = 'Hyperx';
$dell->keyboard = 'Steelseries';
$dell->ssd = 'Kingston 50gb';
$dell->graphicsCard = 'AMD RADEON 4200';
$dell->CPU = "AMD";
$dell->ram = 'Kingston 8gb';
$dell->hdd = '1tb';
$dell->price = 500;
$dell->price2 = 500;

$dell->aboutPC();
$dell->price();
$dell->whichOne();




