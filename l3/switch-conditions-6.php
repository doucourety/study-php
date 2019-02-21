<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 2:39
 */
$season = 'Зима';

//switch ($season)
//{
//    case 'Весна':
//        echo "Сейчас Весна.";
//    break;
//    case 'Лето':
//        echo "Сейчас Лето.";
//    break;
//    case 'Осень':
//        echo "Сейчас Осень.";
//    break;
//    case 'Зима':
//        echo "Сейчас Зима.";
//    break;
//
//    default:
//
//    echo 'Хуй пойми, какое время года';
//
//}


//функция дате с аргументов F возвращает полное название текущего месяца на английском. Доп информация в документации по адресу -  http://php.net/manual/ru/function.date.php
$month = date('F');
echo $month.'<br>';

switch ($month)
{
    case 'January':
        echo 'Сейчас Зима';
    break;
    case 'December':
        echo 'Сейчас Зима';
    break;
    case 'February':
        echo 'Сейчас Зима';
    break;



    case 'March':
        echo 'Сейчас Весна';
    break;
    case 'April':
        echo 'Сейчас Весна';
    break;
    case 'May':
        echo 'Сейчас Весна';
    break;




    case 'June':
        echo 'Сейчас Лето';
    break;
    case 'July':
        echo 'Сейчас Лето';
    break;
    case 'August':
        echo 'Сейчас Лето';
    break;



    case 'Сентябрь':
        echo 'Сейчас Осень';
    break;
    case 'Октябрь':
        echo 'Сейчас Осень';
    break;
    case 'Ноябрь':
        echo 'Сейчас Осень';
    break;

    default:
        echo 'Некорректный месяц';

}