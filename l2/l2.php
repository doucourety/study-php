<?php 

//??????
$name = 'Максим';
$surname = 'Карп';
$age = 26;
$salary = 5000;
$month = 11;
$dayInMonth = 25;
$workingHours = 8;

$name = 'Дмитрий';
$surname = 'Булгар';
$age = 30;
$salary = 5500;


//??????
$money = $salary / $dayInMonth / $workingHours; 
$text = '';
$text .= "Меня зовут " ;
$text .= $name . ' '. $surname ;
$text .= ' Мне уже - '. $age . ' лет';
$text .=  ' В следующем году мне будет ';
$text .= $age + 1;
$text .= "<br> ";
$text .= "Я работаю в компании GooGle. Мой годовой доход составляет ". $salary. " долларов<br>";
$text .= "Я ебошу что царь, что в жизни что в дотке. <br>";
$text .= "Я получаю ".$money." долларов за час работы.<br>";

echo $text;
?>