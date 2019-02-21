<?php

$array = [1,2,31,23,324,23,423,423,4,23,423,4];

foreach ($array as $item)
{
    echo  $item . '<br>';
}


$var = ['one'=>'Один','two'=>'Два','tree'=>'Три'];

foreach ($var as $key=>$value)
{
    echo $key . '<br>';
}


$max = [12,3425,3245,23,45,234,5,234,5234,5,234,5,234,523,45,23452345,234,523,45,2345,23,45,23,4523,523,4];

for ($i = 0; $i<= count($max); $i++)
{
    echo $max[$i];
}

$q = ['qwerqwe', 'asdfasd','qwerqwe',123132,'qwerwqer',561123];
foreach ($q as $item)
{
    echo $item. '<br>';
}

