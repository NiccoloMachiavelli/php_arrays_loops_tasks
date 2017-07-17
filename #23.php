<?php

echo "<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.</p>";

function myFormSum () {
    echo "<form action=\"%2323.php\" method=\"get\">
    Введите число:  <input type=\"text\" name=\"number\"  /><br />
    <input type=\"submit\" name=\"submit\" value=\"Отправить\" /></form>";

    if (is_numeric($_GET['number'])) {
        $sum = 0;
        $tmp = str_split($_GET['number']);
        foreach ($tmp as $value) {
            $sum += $value;
        }
        echo $sum;
    }
    else {
        echo "Enter only numbers plz";
    }
}

myFormSum();


