<?php

echo "<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
    Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
    индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
    индекс.</p>";

$arr1 = [];
for ($i = 0; $i < rand(1,10); $i++) {
    $arr1[$i] = rand(1,100);
}

echo '<pre>';
print_r($arr1);
echo '</pre>';

$result = 1;
foreach ( $arr1 as $k => $value) {
    if ($k % 2 == 0) {
        $result *= $value;
    }
}

echo "Product : {$result}<br>";
echo "Elements that do not have a pair index : <br>";

foreach ($arr1 as $k => $value) {
    if (($k % 2 != 0) && $k > 0) {
        echo $k.' - '.$value.'<br>';
    }
}

