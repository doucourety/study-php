<?php 

//??????
$name = '������';
$surname = '����';
$age = 26;
$salary = 5000;
$month = 11;
$dayInMonth = 25;
$workingHours = 8;

$name = '�������';
$surname = '������';
$age = 30;
$salary = 5500;


//??????
$money = $salary / $dayInMonth / $workingHours; 
$text = '';
$text .= "���� ����� " ;
$text .= $name . ' '. $surname ;
$text .= ' ��� ��� - '. $age . ' ���';
$text .=  ' � ��������� ���� ��� ����� ';
$text .= $age + 1;
$text .= "<br> ";
$text .= "� ������� � �������� GooGle. ��� ������� ����� ���������� ". $salary. " ��������<br>";
$text .= "� ����� ��� ����, ��� � ����� ��� � �����. <br>";
$text .= "� ������� ".$money." �������� �� ��� ������.<br>";

echo $text;
?>