<?php
session_start();
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 16.02.2019
 * Time: 23:13
 */

$_GET;
echo 'Привет! Меня зовут '.$_GET['name']. ' '.$_GET['lastname'];

print_r($_SESSION);
print_r($_COOKIE);
/*
foreach ($_SESSION as $item)
{
    echo $item.'<br>';
}
*/
function test()
{
    $testVar = 123;
}
echo $testVar;



class   test{
    public function test1()
    {
        $var = 1;
        global $var;
    }

    public function test2()
    {

        echo $GLOBALS['var'];
    }
}
