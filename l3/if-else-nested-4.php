<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 1:53
 */

$name = 'Maxim';
$lastName = 'Bulgar';


if ($name == 'Maxim')
{

    echo 'Привет Максим ';

    //Используем вложенный в if, if для вывода фамилии, если она верна
    if ($lastName == 'Karp')
    {
        echo 'Карп';
    }else {
        echo '. Я не знаю вашу фамилию, представьтесь пожалуйста.';
    }


}
else{
    echo 'Мы не знакомы';
}