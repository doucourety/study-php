<?php
$password =  password_hash('123', PASSWORD_DEFAULT );
echo $password. '<br>';


if (password_verify('123',$password))
{
    echo "������ ������, ����� ����������, ����!";
}else{
    echo '��������, ��������, �� ��� ���� ������ ������, ����� �����, � ��� �� ����!';
}