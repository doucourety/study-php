﻿<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 25.02.2019
 * Time: 18:37
 */

include "Room.php";
class Room2 extends Room
{

    public function __construct($color, $size)
    {
        parent::__construct($color, $size);
    }

    public function getColor()
    {
        parent::getColor(); // TODO: Change the autogenerated stub
    }

    public function size()
    {
        parent::size(); // TODO: Change the autogenerated stub
    }

}
