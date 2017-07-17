<?php

echo "<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>";

function myFunc ($numbers,$digit) {
    $arr = str_split($numbers);
    $tmp = $digit;
    $count = 0;
    foreach ($arr as $value) {
        if ($tmp == $value){
            $count++;
        }
    }
    return "digit : ".$digit."<br>in numbers : ".$numbers."<br>times : ".$count;
}

echo myFunc(442158755745,7);


