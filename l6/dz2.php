<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 15.02.2019
 * Time: 16:24
 */
// ������� ��������� ������, � ������� ����� ������� � ���������� ���������, � ��� �� � ��������� ��� ����� ��������� ��� �������� �������, � ����� �������� �� �� ����� ��� ������ ����� foreach

$b = ['������', '���� ����� ������','��� 21 ���', '� � ����� � �����','������ �����','������ ����� ��� ���'];

foreach ($b as $item)
{
    echo $item.'<br>';
}
echo '<br>';
$a = [
    'hello '=>'������',
    'myNameIs '=>'���� �����',
    'name '=>'������',
    'old '=> "��� 21 ���",
    'playDota '=>'����� � ����',
    'retard '=>'������ �����',
    'pro '=>'������ ����� ��� ���'];
foreach ($a as $key=>$value)
{
    echo $key.$value.'<br/>';
}
echo '<br>';


$o =
[

      'name'=> '����',
      'surname'=>'������',
      'b_day'=> '02.13.1995',
      'job' =>  'business',

     'numberTwo' =>
         [
             'name'=> '����',
             'surname'=> ' ������',
             'b_day'=> ' 03.04.1998',
             'job' => 'student',
         ]


];


foreach ($o as $key=>$value)
{
    if (is_array($value))
    {
        foreach ($value as $itemKey=>$itemValue) {
            echo $itemKey  . ' - '. $itemValue.'<br>' ;
     }
    }else
    {
        echo $key.' - '.$value .'<br>' ;
    }

}


$array = [
    [
        'name'=> '����',
        'surname'=>'������',
        'b_day'=> '02.13.1995',
        'job' =>  'business',
    ],
    [
        'name'=> '����',
        'surname'=> ' ������',
        'b_day'=> ' 03.04.1998',
        'job' => 'student',
    ]
];

foreach ($array as $item)
{
    foreach ($item as $key=>$value) {
        echo $key.' - '.$value .'<br>' ;
    }
}