<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 31.01.2019
 * Time: 14:09
 */
//4. ������� ������ ������� ����� ��������� ���������� � ������� � ������� ��� ����� ������ $cars ��������� ����� ������� ������ ���� ����� �����������, � �������� ��������
// ����� ������ � ����������� � ������(� ��������� ��������)
//������: $cars['audi'] = ['color'=>'red'.....];
//����� ������� �� ����� ����-�� ��� ������. ������: ������: ����, ���-�� ������ 4� ���� - �������

$cars2 = [
    'bmw' =>
    [
        'model'=>'bmw',
        'color'=>'red',
        'doors'=>4,
        'mileage'=>'100000'
    ],
    'audi'=>
    [
        'model'=>'audi',
        'color'=>'black',
        'doors'=>2,
        'mileage'=>'90000'
    ],

    'opel' =>
        [
            'model'=>'opel',
            'color'=>'white',
            'doors'=>5,
            'mileage'=>'155000'
        ],



];

echo '������ ������ '.$cars2['bmw']['model']. ', ����: '.$cars2['bmw']['color'].', ���������� ������: '.$cars2['bmw']['doors']. ', ������: '.$cars2['bmw']['mileage'].'<br>' ;
echo '��� ������� ���������� '.$cars2['bmw']['model']. ', ��������� ������ �� ���������� '.$cars2['opel']['model']. ', ����: '.$cars2['opel']['color']. ', ���������� ������'.$cars2['opel']['color']. ', ������: '.$cars2['opel']['mileage'];











    echo '<pre>';
    print_r ($cars2);







