<?php
//$calendar = DateTime::createFromFormat('d-m-Y' ,'H:i:s');
$day = ['1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье',];
foreach (range(1,31) as $number){
    echo $number;
}

print_r($day['6']);