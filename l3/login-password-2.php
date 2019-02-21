<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 1:28
 */

$login = 'Petr';
$password = 123;



if ($login == 'Petr' and $password == 123 )
{
    echo 'Привет '. $login ;
}else {
    echo 'Логин или пароль, не верный!';
}



$login = 'Dmitriy';
$password = 123;

//AND оператор - И // Аналог в символах &&
// OR оператор - ИЛИ // Аналог в символах ||


if ($login == 'Petr' or ($password == 123 AND $login == 'Dmitriy'))
{
    echo 'Привет '. $login ;
}else {
    echo 'Логин или пароль, не верный!';
}