<?php

echo "<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.</p>";

$arr1 = [];
$min = 0;
$max = 0;
for ($i = 0; $i < rand(0,15); $i++) {
    $arr1[$i] = rand(0,50);
}
echo '<pre>';
print_r($arr1);
echo '</pre>';
for ($x = 0; $x < count($arr1); $x++) {
    if ($arr1[$x] > $arr1[$max])
        $max = $x;
    if ($arr1[$x] < $arr1[$min])
        $min = $x;
}
$arr1[$min] += $arr1[$max];
$arr1[$max] = $arr1[$min] - $arr1[$max];
$arr1[$min] = $arr1[$min] - $arr1[$max];
echo '<pre>';
print_r($arr1);
echo '</pre>';










