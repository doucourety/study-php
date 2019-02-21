<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 19:59
 */
//Написать функцию, которая будет выводить на экран время года

echo 'Время года<br>';

$date = date ('d:m:Y');

echo  $date . '<br>';
switch (date('m'))
{
    case 1:
    case 2:
    case 3:
        echo 'Зима<br>';
    break;

    case 4:
    case 5:
    case 6:
        echo 'Весна<br>';
        break;

    case 7:
    case 8:
    case 9:
        echo 'Лето<br>';
        break;

    case 10:
    case 11:
    case 12:
        echo 'Осень<br>';
        break;
}

echo 'Время года<br>';
$date = date('d:m:Y');
echo $date.'<br>';






switch (date('d'))
{
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
    case 17:
    case 18:
    case 19:
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
    case 25:
    case 26:
    case 27:
    case 28:
    case 29:
    case 30:
    case 31:
    echo 'День <br>';
        break;


}

echo $date = date('d'). '<br>';

if ($date == 14)
{
    echo 'День влюбленных';
}else
    {
        echo 'Любой другой день<br>';
    }

