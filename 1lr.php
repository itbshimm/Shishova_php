<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Задание 1
    echo "<h3>Задание 1</h3><p><i>".'"Вычислить расстояние между двумя точками с данными координатами (x1, y1) и (x2, y2)"'."</i></p>";
    $x1 = 10;
    $x2 = 12;
    $y1 = 0;
    $y2 = 2;
    echo "Точка 1($x1, $x2)</br>Точка 2($y1, $y2)</br>";
    echo "Расстояние между точками равно ". sqrt(pow($x2-$x1, 2)+pow($y2-$y1, 2)) ;
    //Задание 1

    //Задание 2
    echo"<h3>Задание 2</h3><p><i>".'"Подсчитать количество отрицательных чисел среди чисел а, b, c"'."</i></p>";
    $a = -6;
    $b = 0;
    $c = 100;
    echo "a = $a, b = $b, c = $c</br>";

    $count = 0;

    if( $a < 0 ||  $b < 0 || $c < 0) {
        $count = $count + 1;
    }
    echo "Количество отрицательных чисел среди чисел а, b, c =".$count;

    //Задание 2

    //Задание 3
    echo"<h3>Задание 3</h3><p><i>".'"Дано натуральное число n . Найти сумму первой и последней цифры этого числа."'."</i></p>";
    $a = 3;
    $n = $a;
    if ($n < 10){
        echo "У числа <i>$a</i>, сумма первой и последней цифры равна $a</br>";
    }else{
        $p = $n % 10;
        while ($n > 10) {
            $n =intdiv($n, 10);
        }
        $sum = $n + $p;
        echo "У числа <i>$a</i>, сумма первой и последней цифры равна $sum</br>";
        echo 96 % 10;
    }
    
    //Задание 3
    ?>
</body>
</html>