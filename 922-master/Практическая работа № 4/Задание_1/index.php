<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        echo "Введите значение a (0 или 1): ";
        $a = (int) trim(fgets(STDIN));

        echo "Введите значение b (0 или 1): ";
        $b = (int) trim(fgets(STDIN));

        echo "Введите значение c (0 или 1): ";
        $c = (int) trim(fgets(STDIN));

        if ($a == 0 && $b == 0 && $c == 1) {
            $q = 1;
        } elseif ($a == 0 && $b == 1 && $c == 0) {
            $q = 1;
        } elseif ($a == 1 && $b == 0 && $c == 0) {
            $q = 1;
        } elseif ($a == 1 && $b == 1 && $c == 1) {
            $q = 1;
        } else {
            $q = 0;
        }

        echo "Результат: q = $q\n";
        echo "Количество проверяемых условий (if + elseif): 4\n";

    ?>