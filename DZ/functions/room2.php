<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 25.02.2019
 * Time: 20:42
 */
include '../classes/Room2.php';
$room = new Room2('red',15);
$room->getColor();
echo '<br>';
$room->size();