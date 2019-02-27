<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 25.02.2019
 * Time: 17:47
 */

class Room
{

public $color ;
protected $size;

public function __construct($color,$size)
{
    $this->color = $color;
    $this->size = $size;
}

    public function getColor()

{
    echo 'Моя комната имеет цвет '.$this->color.'<br>';
}
public function size()

{
    echo 'Моя команта имеет '.$this->size. ' квадратных метров<br>';
}

}
