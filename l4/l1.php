<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 30.01.2019
 * Time: 15:00
 */
/**
 * ������ ������ �������� ������� � ���������� � ��� ������
 */
$people =   [
                '�������',
                '������',
                "������ 89",
                30,
                "������",
                26,
                "����",
                "���������� 5",

            ];

//echo '������ '.$people[4];

/**
 * ������� count() ������� ���������� ��������� � �������, ������� �� ������ � �������� ��������� ������� count($people)
 */
count($people);

/**
 * ������ ������ �������� ������� � ���������� � ��� ������
 */

$array2 = array(
    '�������',
    '������',
    "������ 89",
    30,
    "������",
    "����",
    "���������� 5",
    26);

//count(������) -1 //������ ���� ��������� ������� �������.
echo $array2[3] + $array2[ count($array2) -1 ]. '<br>';

/**
 * ������� �������, ����� ���� ��������
 * ����� �������, �� ����� ��������� � ������ �������������� �������, �� �������� ��� ������.
 * ���� �� �� ��������� ������ � ������(��� ���������� �������������� ��������� �������), ������ ������� ������������ �������� ������� ����� ����� ������������� �������� ������� ������� +1
 */
$people[100] = '���';
$people[] = '�������������';
$people[] = '����';
$people[] = 19;

echo $people[101].'<br>';

//������, ���� ����� ��� �������������, � ���� � ���� � ��� 19 ���.
echo '������, ���� ����� '. $people[100]." ".$people[101]. ', � ���� � '.$people[102].' � ��� ' . $people[103] . ' ���.<br>';

/**
 * ������� �������, ����� ���� ��������
 */

/**
 * ����� �� ��������� ������� ��� ��������� ������� �������, ��������� �����: ������ => ��������
 * ���� ��� ������ '������'=>'��������'
 * �������� ���������� ������� �� ����������� ������ ���� �������, �� ���� ������� ����� ���������� ��� �� �����:
 * ����� => '��������'
 * � ��� ���� ������ '������'=> �����
 * ������ ������� �������, ���������� �� ���������� �� ��� �������� �������
 */
$address = [
    'country'=>'�������',
    'city'=>'����������',
    'street'=>'������ 89',
    'flat'=> 3,
];
$address['state'] = '����������';


//� �������� �� ������: ���������� �������,���������� �����, �.����������, ����� ������ 89, �������� 3

echo '� �������� �� ������: ���������� '.$address['country']. ', '.$address['state']. ' �����, �.'.$address['city'].' ����� '.$address['street']. ', �������� '.$address['flat'].'<br>' ;

/**
 * ������� ����� ������� � ���� �� ������, ������, ����� � ������ ���� ������, �� ��� �� � ������ �������.
 */


$info = [
    1=>[
        'name'      => '�������',
        'lastName'  => '������',
        'age'       => 30,
    ],
    2=>[
        'name'      => '������',
        'lastName'  => '����',
        'age'       => 26,
    ]
];
/**
 * ��������� ������� � �������� ���������� �������
*/
echo $info[1]['name'].'<br>';

//������ ������: �������, ������

$products = [
    [
        'tea'     => '���',
        'coffee'  => '����',
        'water'   => '����',
    ],
    [
        'apple'   => '������',
        'cherry'  => '�����',
        'blackberry' => '�������'

    ],

];

    //� ����� ����
echo '� ����� '. $products [1]['apple'] .'<br>';


$products[] = ['soap'=>'����'];

// � ��������� ����

echo '� ��������� '. $products [2]['soap'].'<br>' ;

echo $products [2]['soap'].'<br>';
$products[2]['powder'] = '�������';
/**
 * print_r(��� �������) ������� �� ����� ��� �������� ������� ����� (������� ������ ��� ����������)
 * ������ ������� ����� ������� ��� var_dump(��� ����������)
 */

$products [2]['soap'] = '������������� ����';
echo $products [2]['soap'].'<br>';

$products[2]['powder'] = '���������� �������';
//echo '<pre>';
//print_r ($products);


echo str_repeat('����� ������ ',10);