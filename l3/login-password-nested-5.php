<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 2:04
 */

$login = 'dima';
$password  = '5515';

    if ($login != 'Maxim')
    {
        echo 'Логин неверный<br>';
    }
    else //Если $login == Maxim
    {
        if ($password != '555')
        {
            echo 'Пароль неверный<br>';
        }else
        {
            echo 'Добро пожаловать на сайт<br>';
        }
    }



if ($login == 'Maxim')
{
    if ($password == '555')
    {
        echo 'Добро пожаловать на сайт<br>';
    }
    else
    {
        echo 'Пароль не верный<br>';
    }
}
else
{
    echo 'Логин не верный<br>';
    if ($password != '555')
    {
        echo 'Пароль не верный<br>';
    }
}