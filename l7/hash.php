<?php
$password =  password_hash('123', PASSWORD_DEFAULT );
echo $password. '<br>';


if (password_verify('123',$password))
{
    echo "Пароль верный, добро пожаловать, ёпта!";
}else{
    echo 'Простите, извините, но вам сюда доступ закрыт, идите нахой, я вас не звал!';
}