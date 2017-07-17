<?php

echo "<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
    выходные дни следует вывести жирным.</p>";

$days_of_week = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

foreach ($days_of_week as $value) {
    echo ($value == 'Saturday' || $value == 'Sunday')? '<strong>'.$value.'</strong>'.'<br>' : $value.'<br>';
}