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
       echo ' ������ ����';
   }
   elseif ($hours >= 06 and $hours <= 11 )
   {
        echo '������ ����';
   }
   elseif ($hours >= 12 and $hours <= 16 )
   {
       echo '������ ����';
   }
   elseif ($hours >= 17 and $hours <=20)
   {
    echo '������ ����� ';
   }

   echo '<br>';

   echo  date ('H:m:s'). '<br>';
   echo date ('l');
