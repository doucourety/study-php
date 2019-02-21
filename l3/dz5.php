<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 20:13
 */
//8. Написать функцию, аргументами которой, нужно будет ввести, имя, фамилию, и число даты рождения. Потом при помощи функции date( http://php.net/manual/ru/function.date.php)
// вывести на экран привествие по типу:
//Привет, меня зовут (имя), я родился (время года), мне (лет)

function  hello ( $name, $surname, $date)
{
 $name = 'Максим';
 $surname = 'Карп';
 $date = date ('01.12.1992');

 $year = 26;
    echo 'Привет, меня зовут ' . $name. ' ' . $surname.  ', я родился ' . $date . ', мне ' . $year . ' лет';






}
echo hello('Maxim','Karp','01.12.1992');