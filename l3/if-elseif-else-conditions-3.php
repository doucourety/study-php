<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 18.01.2019
 * Time: 1:43
 */



$player1 = 'Dima';
$player2 = 'Max';
$winner = $player2;


if ($winner == $player1)
{
    echo 'Поздравляем, Дмитрий, вы выиграли!';
}
elseif($winner == $player2)
{
    echo 'Поздравляем, Максим, вы выиграли!';
}
else{
    echo 'Победителя нет(';
}
