<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 20:13
 */
//8. �������� �������, ����������� �������, ����� ����� ������, ���, �������, � ����� ���� ��������. ����� ��� ������ ������� date( http://php.net/manual/ru/function.date.php)
// ������� �� ����� ���������� �� ����:
//������, ���� ����� (���), � ������� (����� ����), ��� (���)

function  hello ( $name, $surname, $date)
{
 $name = '������';
 $surname = '����';
 $date = date ('01.12.1992');

 $year = 26;
    echo '������, ���� ����� ' . $name. ' ' . $surname.  ', � ������� ' . $date . ', ��� ' . $year . ' ���';






}
echo hello('Maxim','Karp','01.12.1992');