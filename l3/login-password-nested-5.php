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
        echo '����� ��������<br>';
    }
    else //���� $login == Maxim
    {
        if ($password != '555')
        {
            echo '������ ��������<br>';
        }else
        {
            echo '����� ���������� �� ����<br>';
        }
    }



if ($login == 'Maxim')
{
    if ($password == '555')
    {
        echo '����� ���������� �� ����<br>';
    }
    else
    {
        echo '������ �� ������<br>';
    }
}
else
{
    echo '����� �� ������<br>';
    if ($password != '555')
    {
        echo '������ �� ������<br>';
    }
}