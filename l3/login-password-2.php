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
    echo '������ '. $login ;
}else {
    echo '����� ��� ������, �� ������!';
}



$login = 'Dmitriy';
$password = 123;

//AND �������� - � // ������ � �������� &&
// OR �������� - ��� // ������ � �������� ||


if ($login == 'Petr' or ($password == 123 AND $login == 'Dmitriy'))
{
    echo '������ '. $login ;
}else {
    echo '����� ��� ������, �� ������!';
}