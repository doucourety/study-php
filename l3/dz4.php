<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 20:05
 * @param $hero
 */
//6. �������� �������, ���������� ������� ����� ������ � ������ �����.
//� ���� �������� � ��� ����� ���� if ���� switch-case ����������� ��� ������ �� ����� ������ ������� ����� (������ ������ ��� �������� �� ���� ����� �� ��� ��� �� ������ ������������).
//��� �� ������ ���� ������� ��� ���� � ����� �� ������������ �����, ���� ��� ������ ��������� � ���, ��� ����� ���� �� ��� ����� ����� � ����.

function getPosition($hero)
{
$hero = strtolower($hero); // strtolower() ��������� ��� ������ � ������ �������

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
            echo '������';

    }
}


getPosition('doom');

echo '<br>';

function getPositionmonth ($month)
{
    switch ($month)
    {
        case '�������';
        case '������';
        case '�������';
        echo '������ ����<br>';
        break;

        case '����';
        case '������';
        case '���';
        echo  '������ �����<br>';
        break;

        case '����';
        case '����';
        case '������';
        echo '������ ����<br>';
        break;

        case '��������';
        case '�������';
        case '������';
        echo '������ �����<br>';
        break;

    }
}


getPositionmonth('����');