<?php

echo "<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
    '123456789'.</p>";

$arr = [1,2,3,4,5,6,7,8,9];
$str = "";
foreach ($arr as $value){
    $str .= $value;
}
echo var_dump($str);