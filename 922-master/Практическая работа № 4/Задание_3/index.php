<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        echo "Решение квадратного уравнения: a*x^2 + b*x + c = 0\n"; 
        echo "Введите a: ";

        $a = (float) trim(fgets(STDIN));

        if ($a == 0) {
            echo "Ошибка: коэффицент 'a' не может быть равен 0 ()уравнение не квадратное). \n";
            exit(1);
        }

        echo "Введите b: ";
        $b = (float) trim(fgets(STDIN));

        echo "Введите c: ";
        $c = (float) trim(fgets(STDIN));

        $D = $b * $b - 4 * $a * $c;

        echo "Дискриминант D = $D\n";

        if ($D > 0) {
            $sqrtD = sqrt($D);
            $x1 = (-$b + $sqrtD) / (2 * $a);
            $x2 = (-$b + $sqrtD) / (2 * $a);
            echo "Уравнение имееют два корня: \n";
            echo "x1 = $x1\n";
            echo "x2 = $x2\n";

        } elseif ($D == 0) {
            $x = -$b / (2 * $a);
            echo "Уравнение имеет один корень (два совпадающих): \n";
            echo "x = $x\n";

        } else {
            echo "Уравнение не имеет действительных корней. \n";
        }

    ?>

</body>
</html>