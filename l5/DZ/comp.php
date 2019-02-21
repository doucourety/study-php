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
        echo 'Привет! Продаю игровой компьютер:<br> ';
    }
    public function aboutPC()
    {
        echo
            'в комплекте идет монитор марки '.$this->monitor.
            ', Мышь '.$this->mouse.
            ', Клавиатура '.$this->keyboard.
            ',  Жесткий диск '.$this->hdd.
            ' вдобавок имеется жесткий диск '.$this->ssd.
            ', Видеокарта '.$this->graphicsCard. ' ,
             Процессор '.$this->CPU.
            ', Оперативная память '. $this->ram. '.<br>';
    }
    public function price ()
    {
        echo ($this->price + $this->price2).' евро<br>';
    }
    public function whichOne()
    {
        if ($this->price+$this->price2 <= 1400)
        {
            echo 'Слабый компьютер, не буду брать<br>';
        }else
        {
            ($this->price+$this->price2 > 1400 ); // Эта строка лишняя, мы уже знаем что цена больше чем 1400 так как первый блок if не сработал выдав результат false
            echo 'Добрый компьютер, пожалуй возьму для абуза мм и рофла в пабжи<br>';
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



echo 'А также на продаже имеется компьютер:<br>';
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




