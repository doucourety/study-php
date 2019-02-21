<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 20:15
 */


/**
 * Class Phone
 * Объявляем класс Phone
 */
class Phone
{
    public $model;
    public $color;
    public $memory;
    public $created;
    public $contacts = [];
    private $text;

    public function call ($number)
    {
        echo 'Звоню на '.$number;

    }
    public function typeMessage($text)
    {
       $this->text = $text;
    }
    public function saveContact($name,$number)
    {
        $this->contacts[] = ['name'=>$name,'number'=>$number];
    }
    public function sendMessage()
    {
        echo 'Я отправляю '. $this->text;
    }

    public function showContacts()
    {
        echo '<br>';
        echo 'Список контактов:<br>';
        foreach ($this->contacts as $contact)
        {
            echo '<b>'. $contact['name'] . '</b>:' . $contact['number']. '<br>';
        }

    }
}

$iphone = new Phone();
$iphone->model = '6S';
$iphone->color = 'gray';
$iphone->memory = 16;
$iphone->created = 2015;
$iphone->call(69441573);
echo '<br>';
$iphone->typeMessage('Катать будешь?');
$iphone->sendMessage();
$iphone->saveContact('Дмитрий', 15256489);
$iphone->saveContact('Женя', 65465465);
$iphone->showContacts();