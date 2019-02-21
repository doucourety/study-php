<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 11.02.2019
 * Time: 14:52
 */
class fish
{
    public $name;
    public $weight;
    public $scales;
    public $tail;
    public $head;

    public function eatFish()
    {
        if ($this->weight >= 300)
        {
            echo $this->name. ' - этой рыбой можно наесться<br>';
        }else
        {
            echo $this->name. ' - этой рыбой нельзя наесться<br>';
        }
    }

    public function wish()
    {
        if ($this->head == 'gold')
        {
            echo 'У тебя есть 3 желанияи<br>';
        }else
        {
            echo 'Ты не можешь загадывать желание<br>';
        }
    }

}




$karp = new fish();
$karp->name = 'Карп';
$karp->weight = 300;
$karp->scales = '';
$karp->tail = '';
$karp->head = 'notGold';
$karp->eatFish();
$karp->wish();




$goldFish = new fish();
$goldFish->name  = 'Золотая Рыбка';
$goldFish->weight = 20;
$goldFish->scales = '';
$goldFish->tail = '';
$goldFish->head = 'gold';
$goldFish->eatFish();
$goldFish->wish();