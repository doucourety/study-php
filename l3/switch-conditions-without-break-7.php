<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 2:39
 */


//функция дате с аргументов F возвращает полное название текущего месяца на английском. Доп информация в документации по адресу -  http://php.net/manual/ru/function.date.php
$month = date('F');


if ($month == 'January')
{
    echo "Сейчас Зима!".'<br>';;
}
echo $month.'<br>';

$month = 'May';

switch ($month)
{
    case 'January':
    case 'December':
    case 'February':
        echo 'Сейчас Зима';
    break;

    case 'March':
    case 'April':
    case 'May':
        echo 'Сейчас Весна';
    break;


    case 'June':
    case 'July':
    case 'August':
        echo 'Сейчас Лето';
    break;


    case 'Сентябрь':
    case 'Октябрь':
    case 'Ноябрь':
        echo 'Сейчас Осень';
    break;

    default:
        echo 'Некорректный месяц';

}