<?php
    $x = "Hello";
    echo "Var: $x <br>";
    // функции внутри кавычек работают
    // грузятся дольше обычных
    echo 'Var: $x <br>';
    // функции не работают
    echo "<input type=\"text\"><br>";
    // для работы кавычек внутри
    // кавычек используется слеш

    $length = strlen($x);
    echo $length.'<br>';
    // функция считает количетсво символов
    echo trim("  4  ").'<br>';
    // функция удаляет внешние пробелы
    echo strtolower(" FUCK YOU").'<br>';
    // функция переводит символы в нижний регистор
    echo strtoupper(" fuck you").'<br>';
    // функция переводит в верхний регистор
    // mb_strtoupper для символов с кириллицой
    echo md5("qwerty").'<br>';
    // перевод сиволов в кеш
?>
