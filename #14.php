<?php

echo "<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>";

$arr = [4,2,5,19,13,0,10];
foreach ($arr as $value){
    if($value == 2 || $value == 3 || $value == 4 )
    {
        echo '<p>Есть!</p>';
    }
    else {
        echo '<p>Нет!</p>';
    }
}
