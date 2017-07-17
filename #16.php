<?php

echo "<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке:
<pre>
1, 2, 3
4, 5, 6
7, 8, 9</pre></p>";

$arr = [1,2,3,4,5,6,7,8,9];

foreach ($arr as $key => $value) {
    /*if ($key >= 0 && $key <= 2) {
        print ($key < 2) ? $value.', ':$value.'<br>' ;
    }
    elseif ($key >= 3 && $key <= 5) {

        print ($key < 5) ? $value.', ':$value.'<br>' ;
    }
    elseif ($key >= 6 && $key <= 8) {

        print ($key < 8) ? $value.', ':$value.'<br>' ;
    }*/
    if ($key < 2) {

        echo $value.', ';
    }
    elseif ($key >2 && $key <5) {

        echo $value.', ';
    }
    elseif ($key >5 && $key < 8) {

        echo $value.', ';
    }
    else {
        echo $value.'<br>';
    }
}

