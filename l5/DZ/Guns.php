<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 10.02.2019
 * Time: 17:54
 */
//������� ����� ������, � ��������� ��������� �������(������� ���������� ������), � ����� ������� ��������� ��������(������) �� ����� ������
//��������� ��� ������� �� ����� ��������� �������, �����-��  ������, ������� ���-�� ����� ������. ��� ��������� ��� ����� ������, �� ��� ����������
class Guns
{
    public $name;
    public $color;
    public $magazine;
    public $shotInSeconds;
    public $recharge;
    public $incMag = 40;
    public $isPrevent = true;



    public function mag()
    {
        if ($this->incMag >= 30 )
        {
            echo $this->name. ' � ��� ����������� �������<br>';
        }else
        {
            ($this->incMag < 35 );

            echo $this->name. ' � ��� 30 ��� ������ ��������<br>';
        }
    }
    public function shot()
    {
        if ($this->isPrevent == true)
        {
            return;
        }
        $this->magazine =$this->magazine -1;
    }

    public function preventer()
    {
        if ($this->isPrevent == false)
        {
            $this->isPrevent = true;
        }else
            {
                $this->isPrevent = false;
            }
    }

    public function magStatus()
    {
        echo '�������� �������� '. $this->magazine. '<br>';
    }






}
$karyak = new Guns();
$karyak->name = '�����';
$karyak->color = 'black';
$karyak->magazine = 5;
$karyak->shotInSeconds = 1;
$karyak->recharge = 3;
$karyak->incMag = false;
$karyak->preventer();
$karyak ->mag();
$karyak->shot();
$karyak->shot();
$karyak->shot();
$karyak->shot();
$karyak->magStatus();






$tommyGun = new Guns();
$tommyGun->name = '�����';
$tommyGun->color = 'gray';
$tommyGun->magazine = 50;
$tommyGun->shotInSeconds = 10;
$tommyGun->recharge = 2;
$tommyGun->preventer();
$tommyGun->mag();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->shot();
$tommyGun->magStatus();
$tommyGun->preventer();


$microUzi = new Guns();
$microUzi->name = '���';
$microUzi->color = 'orange';
$microUzi->magazine = 25;
$microUzi->shotInSeconds = 15;
$microUzi->recharge = 2;
$microUzi->mag();
$microUzi->preventer();
$microUzi->shot();
$microUzi->magStatus();


