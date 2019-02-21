<?php
/**
 * Created by PhpStorm.
 * User: gagau
 * Date: 15.02.2019
 * Time: 16:24
 */
// Сделать несколько файлов, в которых будут массивы с строковами индексами, а так же и смешанные где будут строковые или цифровые индексы, а затем выводить их на экран при помощи цикла foreach

$b = ['Привет', 'Меня зовут Михаил','Мне 21 лет', 'и я катаю в дотку','иногда ракую','иногда играю как бог'];

foreach ($b as $item)
{
    echo $item.'<br>';
}
echo '<br>';
$a = [
    'hello '=>'привет',
    'myNameIs '=>'меня зовут',
    'name '=>'Михаил',
    'old '=> "мне 21 год",
    'playDota '=>'катаю в доту',
    'retard '=>'иногда ракую',
    'pro '=>'иногда играю как бог'];
foreach ($a as $key=>$value)
{
    echo $key.$value.'<br/>';
}
echo '<br>';


$o =
[

      'name'=> 'Иван',
      'surname'=>'Иванов',
      'b_day'=> '02.13.1995',
      'job' =>  'business',

     'numberTwo' =>
         [
             'name'=> 'Олег',
             'surname'=> ' Меняев',
             'b_day'=> ' 03.04.1998',
             'job' => 'student',
         ]


];


foreach ($o as $key=>$value)
{
    if (is_array($value))
    {
        foreach ($value as $itemKey=>$itemValue) {
            echo $itemKey  . ' - '. $itemValue.'<br>' ;
     }
    }else
    {
        echo $key.' - '.$value .'<br>' ;
    }

}


$array = [
    [
        'name'=> 'Иван',
        'surname'=>'Иванов',
        'b_day'=> '02.13.1995',
        'job' =>  'business',
    ],
    [
        'name'=> 'Олег',
        'surname'=> ' Меняев',
        'b_day'=> ' 03.04.1998',
        'job' => 'student',
    ]
];

foreach ($array as $item)
{
    foreach ($item as $key=>$value) {
        echo $key.' - '.$value .'<br>' ;
    }
}