<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 09.02.2019
 * Time: 20:25
 */

class Bird
{
    public $name;
    public $color;
    public $weight;
    public $beak;

    public function name ()
    {
        echo '��� ����� ����� '.$this->name.'<br>';
    }
    public function say ($string)
    {
        echo '��� ����� ��� ������ '.$this->name. ' ������ ���� ����� ���� ������: '. $string. '<br>';
    }
    public function peckInfo ()
    {
        echo '� ��� ����� ������ '.$this->beak;
    }

    public function birdInfo()
    {

        echo '<br>';
        if ($this->weight > 60)
        {
            echo '�� �� '. $this->name . ' ������� �����';
        }else{
            echo '�� �� '. $this->name . ' �����������';
        }
    }

}


$bird = new Bird();
$bird->name = '����';
$bird->color = 'yellow';
$bird->weight = 0.5;
$bird->beak = '����';

$bird->name();
$bird->say('������');
$bird->peckInfo();
$bird->birdInfo();



$vorobeiJack = new Bird();
$vorobeiJack->name = '�������, ���� �������';
$vorobeiJack->color = 'black';
$vorobeiJack->weight = 78;
$vorobeiJack->birdInfo();


$solovey = new Bird();
$solovey->name = '������� ���������';
$solovey->color = 'red';
$solovey->weight = 103;
$solovey->birdInfo();
