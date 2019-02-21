<?php
include 'classes/Clock.php';
include 'classes/AppleWatch.php';
$appleWatch = new AppleWatch();
$appleWatch->setModel('g302');
$appleWatch->setName('AppleWatch');
$appleWatch->displayDate();
$appleWatch->clockInfo();

