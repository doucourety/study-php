<?php



function displayName($name, $surname)
{
	echo 'Привет, меня зовут'. $name . ' '. $surname.'<br>';
}

function addressName ($streetName, $home, $number)
{
	echo 'Я проживаю по адресу ' . $streetName. ' '. $home. ', кв.'. $number.'<br>';
}

function totalMoneyForYear($salary)
{
	 return $salary * 12;
}

function umn($a, $b)
{
	return $a * $b;
}
$result = umn(2,2);
echo $result;
totalMoneyForYear(5000);
//echo "Я получаю в год  .totalMoneyForYear(5000);

//displayName('Макс',"Карп");
//addressName ( 'Толстова', 6, 3);

//displayName("Дмитрий", "Булгар");
//addressName('Ленина', 89,3);






