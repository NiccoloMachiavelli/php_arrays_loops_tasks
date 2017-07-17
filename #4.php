<?php

echo "<p>4. Дан массив arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
    помощью второго — столбец элементов.</p>";

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key => $value) {
    echo $key.'<br>';
}

echo '<br>';

foreach ($arr as $key=>$value) {
    echo $value.'<br>';
}

