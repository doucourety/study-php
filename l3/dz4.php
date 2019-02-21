<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 20:05
 * @param $hero
 */
//6. Написать функцию, аргументом которой будет строка с именем героя.
//В теле фукнкции у нас будут либо if либо switch-case конструкции для вывода на экран номера позиции героя (список героев при проверке ДЗ буду брать из тех что ты будешь использовать).
//Так же должно быть условие что если я введу не существуюего героя, чтоб мне вывело сообщение о том, что габен пока не ввёл этого героя в игру.

function getPosition($hero)
{
$hero = strtolower($hero); // strtolower() переводит всю строку в нижний регистр

    switch ($hero)
    {
        case 'sven':
            echo 'carry';
            break;
        case 'juger':
            echo 'carry';
            break;
        case 'slark':
            echo 'carry';
            break;


        case 'shaman':
            echo 'sup';
            break;
        case 'crystalMaiden':
            echo 'sup';
            break;
        case  'rubick':
            echo 'sup';
            break;


        case 'invoker':
            echo 'midlane';
            break;
        case 'lina':
            echo 'midlane';
            break;
        case 'tinker':
            echo 'mid';
            break;


        case 'timber':
            echo 'hardlane';
            break;
        case 'clockwek':
            echo 'hardlane';
            break;
        case 'doom':
            echo 'hardlane';
            break;

        default:
            echo 'Руинер';

    }
}


getPosition('doom');

echo '<br>';

function getPositionmonth ($month)
{
    switch ($month)
    {
        case 'Декабрь';
        case 'Январь';
        case 'Февраль';
        echo 'Сейчас зима<br>';
        break;

        case 'Март';
        case 'Апрель';
        case 'Май';
        echo  'Сейчас весна<br>';
        break;

        case 'Июнь';
        case 'Июль';
        case 'Август';
        echo 'Сейчас лето<br>';
        break;

        case 'Сентябрь';
        case 'Октябрь';
        case 'Ноябрь';
        echo 'Сейчас осень<br>';
        break;

    }
}


getPositionmonth('Июнь');