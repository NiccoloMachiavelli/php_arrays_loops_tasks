<?php

echo "<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной day.</p>";

$days_of_week = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

foreach ($days_of_week as $value) {
    $day = date('l');
    echo ($value == $day)? '<em>'.$value.'</em>'.'<br>' : $value.'<br>' ;
}