<?php

echo "<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p>";

for ($y = 0;$y < 20;$y++)  {
    echo 'x';
    for ($x = 0;$x < $y;$x++) {
        echo 'x';
    }
    echo '<br>';
}


