<?php
    $number = 4; // вводим переменную number
    $number = 5; // меняем значение переменной
    echo $number; // выводим значение переменной
    echo "<br> наверное число " . $number;
    // добавляем точку для добавления ещё одной переменной
    $number2 = "текст"; // вводим значение ввиде текста
    $number3 = 34;
    echo "<br>" . $number . $number2 . $number3;
    // результат: 5текст34
    echo "<br>" . $number . $number3 . $number2;
    // результат: 534текст
    $a = 4; // int
    $b = "5"; // string
    $c = -3.4; // float
    echo "<br>" . $a + floatval($b); // меняем стринг на инт
    $f = 66;
    $press = "ggalien 5";
    echo "<br>" . $f + floatval($press); // так не получится
    const MY_AGE = 24;
    // введение константы - они как int только не меняются
    echo "<br>" . MY_AGE;
    define("FOO", "something");
    // второй способ введения константы
    echo "<br>" . FOO;
?>
