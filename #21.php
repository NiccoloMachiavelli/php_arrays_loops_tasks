<?php

echo "<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
    рядов, а не 5.<br><br>
    1<br>
    22<br>
    333<br>
    4444<br>
    55555</p>";

for ($y = 1;$y <= 9;$y++) {
    echo $y;
    for ($x = 1;$x < $y;$x++){
        echo $y;
    }
    echo '<br>';
}