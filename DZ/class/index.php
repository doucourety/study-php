<?php
include 'auto.php';

$lada = new auto('Лада','white',4,4,'left',0,5, false);
$lada->ride();
echo '<br>';
$lada->transport();
echo '<br>';
$lada->crashStatus();




