<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 2:39
 */


//������� ���� � ���������� F ���������� ������ �������� �������� ������ �� ����������. ��� ���������� � ������������ �� ������ -  http://php.net/manual/ru/function.date.php
$month = date('F');


if ($month == 'January')
{
    echo "������ ����!".'<br>';;
}
echo $month.'<br>';

$month = 'May';

switch ($month)
{
    case 'January':
    case 'December':
    case 'February':
        echo '������ ����';
    break;

    case 'March':
    case 'April':
    case 'May':
        echo '������ �����';
    break;


    case 'June':
    case 'July':
    case 'August':
        echo '������ ����';
    break;


    case '��������':
    case '�������':
    case '������':
        echo '������ �����';
    break;

    default:
        echo '������������ �����';

}