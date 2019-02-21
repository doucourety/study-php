<?php
//include включает в себя содержимое указанного файла, в данном случае подключается класс Clock
include "classes/Clock.php";
//В этом случае подключается functions
include "functions/functions.php";
$watch = new Clock('red',3,21313,'mech',100);
$watch->displayTime();
$watch->displayDate();
hello();
displayText('Я говорю');