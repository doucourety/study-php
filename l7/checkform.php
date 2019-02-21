<?php
//$_GET суперглобальный массив с индексами указанными в текстовых полях формы

$name = 'Maxim';
$password = 'Karp';
if ($_POST['name'] == $name and $_POST['password'] == $password )
{
    echo 'Добро пожаловать на сайт';
}else
    {
        echo 'Неправильные данные';
    }