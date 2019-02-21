<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 21.01.2019
 * Time: 18:50
 */
//3. Написать конструкцию switch-case для героев из доты 2. В аргументе switch($hero) будет строка с именем героя. Нам нужно будет вывести информацию о позиции этого героя
//пример кода
//$hero = Sven
//
//switch ($hero)
//{
//    case 'Sven':0
//        echo "Carry";
//    break;
//}
$hero = 'Karaman';


    switch ($hero)
    {
        case 'sven':
            echo 'carry';
        break;
        case 'juger':
            echo 'carry';
        break;
        case 'slark':
            echo 'carry';
        break;


        case 'shaman':
            echo 'sup';
        break;
        case 'crystalMaiden':
            echo 'sup';
        break;
        case  'rubick':
            echo 'sup';
        break;


        case 'invoker':
            echo 'midlane';
        break;
        case 'Lina':
            echo 'midlane';
        break;
        case 'tinker':
            echo 'mid';
        break;


        case 'timber':
            echo 'hardlane';
        break;
        case 'clockwek':
            echo 'hardlane';
        break;
        case 'doom':
            echo 'hardlane';
        break;

        default:
            echo 'Руинер';

    }