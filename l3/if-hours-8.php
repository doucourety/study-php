<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 3:29
 */

    $hours = date('H ');


   if ($hours >= 21 or  $hours <= 05  )
   {
       echo ' Сейчас ночь';
   }
   elseif ($hours >= 06 and $hours <= 11 )
   {
        echo 'Сейчас утро';
   }
   elseif ($hours >= 12 and $hours <= 16 )
   {
       echo 'Сейчас обед';
   }
   elseif ($hours >= 17 and $hours <=20)
   {
    echo 'Сейчас Вечер ';
   }

   echo '<br>';

   echo  date ('H:m:s'). '<br>';
   echo date ('l');
