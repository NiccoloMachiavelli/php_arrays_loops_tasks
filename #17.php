<?php

echo "<p>17.Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной month.</p>";

$arrMonths = ['January','February','March','April','May','June','July',
    'August','September','October','November','December'];

foreach ($arrMonths as $value) {
    $month = date("F");
    echo ($value == $month)? '<strong>'.$value.'<br>'.'</strong>' : $value.'<br>' ;
}

