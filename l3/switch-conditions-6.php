<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 2:39
 */
$season = '����';

//switch ($season)
//{
//    case '�����':
//        echo "������ �����.";
//    break;
//    case '����':
//        echo "������ ����.";
//    break;
//    case '�����':
//        echo "������ �����.";
//    break;
//    case '����':
//        echo "������ ����.";
//    break;
//
//    default:
//
//    echo '��� �����, ����� ����� ����';
//
//}


//������� ���� � ���������� F ���������� ������ �������� �������� ������ �� ����������. ��� ���������� � ������������ �� ������ -  http://php.net/manual/ru/function.date.php
$month = date('F');
echo $month.'<br>';

switch ($month)
{
    case 'January':
        echo '������ ����';
    break;
    case 'December':
        echo '������ ����';
    break;
    case 'February':
        echo '������ ����';
    break;



    case 'March':
        echo '������ �����';
    break;
    case 'April':
        echo '������ �����';
    break;
    case 'May':
        echo '������ �����';
    break;




    case 'June':
        echo '������ ����';
    break;
    case 'July':
        echo '������ ����';
    break;
    case 'August':
        echo '������ ����';
    break;



    case '��������':
        echo '������ �����';
    break;
    case '�������':
        echo '������ �����';
    break;
    case '������':
        echo '������ �����';
    break;

    default:
        echo '������������ �����';

}