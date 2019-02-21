<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 18:20
 */

class Car
{
    public $model;
    public $name;
    public $color;
    public $wheels = 4;
    public $gasCapacity = 0;

    public $isMoving = false;
    public $isDestroyed = false;
    public $probeg = 0;


    /**
     * ����� ������� ������� ���� ������ �� 10 ������ �����
     * ��� ���� ������ �������� $this->isMoving �������� true, ��� ��� ���� ������ � ������ ������ ��������� � ��������� ��������
     * ����� � �������� $this->probeg ��������� ����� 10, ��� ������� � ��� ��� ����� ������ ����� ������ ���������� �� 10 ������
     * ����� �� ������� �� ����� ���������� � ��� ��� ���� ������ �������� 10 ������.
     */
    public function move()
    {
        //$this ��� ���������� ��������� �� ������ ������� ����� ������ �� ����� ������
        //�� ���� ��������� ��� �� ���������� � ���� ������� � ������� ������ ����� ��� ����������.

        if ($this->gasCapacity < 1)
        {
            $this->stop();
            echo "�� ������� �������";
            return 1;
        }
        $this->isMoving = true;
        $this->probeg = $this->probeg  + 10;
        $this->gasCapacity -= 10;

        echo '������ �������� 10 ������ <br>';

    }

    /**
     * ���� ����� ������ Car ������������� ������
     * � ��� �� ������ �������� �������� $this->isMoving �� false ��� ��� ������ ������ �� ���������� � ��������� ��������
     */
    public function stop()
    {
        $this->isMoving = false;
        echo '������ ������������ <br>';
    }

    /**
     * ���� ����� ������ �������� $this->isDestroyed �������� true, ��� ������� � ��� ��� ���� ������ ���������
     */
    public function destroyCar()
    {
        $this->isDestroyed = true;
        echo '������ ��������� <br>';
    }

    /**
     * ���� ����� ������� ���������� � ���, � ����� ��������� ��������� ������, ���� � ������� ������ ��� ���.
     */
    public function currentStatus()
    {
        if ($this->isMoving == true)
        {
            echo '������ ������ ����<br>';
        }else{
            echo '������ �� ����<br>';
        }
        echo '������� �������� '. $this->gasCapacity . '<br>';

    }
}

$audi = new Car();
$audi->name = 'A4';
$audi->model = 'Audi';
$audi->color = 'Red';
$audi->gasCapacity = 40;




$audi->move();
$audi->move();
$audi->move();
$audi->move();
$audi->stop();
echo  $audi->currentStatus() . '<br>';

$audi->move();
