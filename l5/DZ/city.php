<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 11.02.2019
 * Time: 13:23
 */


//������� ����� �����, � ��������� ��������� �������(������� ���������� ������), � ����� ������� ��������� ��������(�������) �� ����� ������
// ��������� ��� ������� �� ����� ��������� �������, �����-��  ������, ������� ���-�� ����� ������. ��� ��������� ��� ����� ������, �� ��� ����������

class city
{
    public $name;
    public $index;
    public $road;
    public $street;
    public $job ;
    public $business;



    public function streetStatus ()
    {

        if ($this->street == 'bad')
        {
            echo $this->name. ' - ������ �����<br>';
        }
        else
        {
            ($this->street ==  'good'); //������, ��� ��� � ������ ����� if �� ��������� ��� �������� street �� ����� bad
            echo $this->name. ' - ������� �����<br>';
        }


    }
    public function lives ()
    {
        if($this->business == true)
        {
            echo '� ���� ���� � ���� ������<br>';
        }elseif ($this->job <= 2500)
        {
            echo  '� �� ���� ���� � ���� ������.<br>';
        }
        else{
            echo '������� ���, �� ���� ��������� ���������� �����, ������� � ���� ���� � ���� ������. <br>';
        }

    }



}



//$cahul = new city();
//$cahul->name = '�����';
//$cahul->index =1221313132;
//$cahul->road = 150;
//$cahul->street = 'good';
//$cahul->job = 25011;
//$cahul->business = false;
//echo $cahul->name. ' - ';
//$cahul->streetStatus();
//$cahul->lives();
//������ � ������� ���������� � ������ � ������� ��� �����, � ������� � �������, ������� ������ �� ������ � ������ �������� $vulcanesti

$vulcanesti = new city();
$vulcanesti->name = '����������';
$vulcanesti->index = 4565465;
$vulcanesti->road = 99;
$vulcanesti->street = 'bad';
$vulcanesti->job = 2490;
$vulcanesti->business = false;
$vulcanesti->streetStatus();
$vulcanesti->lives();


