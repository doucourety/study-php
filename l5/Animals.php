<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 05.02.2019
 * Time: 17:59
 */

/**
 * Class Cat
 * ���������� ������ Cat
 */
class Cat
{
    public $name = 'Pupsik';
    public $color = 'Gray';
    public $weight = 3;
    public $tail;

    private $brain = 0.3;
}
$cat = new Cat();
echo  $cat->name .'<br>';

$cat->name = 'Vasya';

echo $cat->tail;

/**
 * Class Dog
 * �������� ����� Dog, �������� ��� ������ �������, � ��� �� ���� �������. *
 */
class Dog
{
    /*
     * ���������� �������
     */
    public $name = 'Sharik';
    public $color = 'black';
    public $age = 7;

    /*
     * ���������� �������
     */
    public function say()
    {
        echo 'Gav-gav';
    }

    public function bite()
    {
        echo '������';
    }


}

$dog = new Dog ();
echo '����� ��� ����� '. $dog->name . ', ��� �� ����� �������������, �����, �����! <br>';
$dog->say();
echo '<br>';
$dog->bite();


