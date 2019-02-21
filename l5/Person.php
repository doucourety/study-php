<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 19:30
 */

class Person
{
    public $name;
    public $age;
    public $lastName;
    public $weight;
    public $height;
    public $address;

    public function sayHello()
    {
        echo '������<br>';
    }
    public function say($string)
    {
        echo $this->name. ' �������: '. $string. '<br>';
    }

    public function name()
    {
        echo '���� ����� '. $this->name . ' ' . $this->lastName . '<br>';
    }
}

class Address
{
    public $country;
    public $city;
    public $street;
    public $flat;
}
// -> ������->���������������
// -> ������->������������()

//������� ������ ������ Person � ��������� ������ � ���������� $vakar
$vakar = new Person();
$vakar->name = '�������';
$vakar->age = 26;
$vakar->lastName = '��������';
$vakar->address = '������';

$vakar->sayHello();
$vakar->say('����');
$vakar->name();

//������� ������ ������ Person � ��������� ������ � ���������� $maxim
$maxim = new Person();
$maxim->name = '������';
$maxim->age = 26;
$maxim->lastName = '����';
$maxim->weight = 80;
$maxim->height = 175;
//$maxim->address;

$maxim->address = new Address();
$maxim->address->country = 'Moldova';
$maxim->address->city = 'Vulcanesti';
$maxim->address->street = 'Tolstoi';
$maxim->address->flat = 8;

$maxim->sayHello();
$maxim->name();
$maxim->say('�������');

$maxim->age = 27;
