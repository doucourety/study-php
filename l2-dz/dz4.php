<?php
// �������� �������, ������� ����� ��������� � �������� ���������� �������, ����� ���� ��� - �.�.�., �����, � �����.
//����� ��� ��� ������� �� �����, ��������������� ��� ��� � ����������, � ����� ��� ������ ������� echo ������� ���������� ���������� �� �����.

function displayName ($surname, $name, $otherName, $homeAdress, $number, $tennis)
{
    $text  = '���� ����� ';
    $text .= $name . ' '. $surname . ' ' . $otherName .'. <br>';
    $text .= '�������� �� ������ ' . $homeAdress . ' '. $number .'.<br>';
    $text .= '����� ����� � ������ ���������� ' . $tennis . '. ';

    echo $text;
}
displayName(������, ����, ��������, ������������, 48, ������ )


?>