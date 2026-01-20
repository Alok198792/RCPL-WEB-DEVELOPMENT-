<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 1.
    echo "Welcome PHP<br>";
    echo "Hello world<br>";
    echo "\$Hello PHPS";

    // 2.
    $a = 10;
    $b = 20;

    echo "Before Swapping:<br>";
    echo "a = $a, b = $b<br>";

    $temp = $a;
    $a = $b;
    $b = $temp;

    echo "After Swapping:<br>";
    echo "a = $a, b = $b";

    // 3.
    $radius = 5;
    $area = 3.14 * $radius * $radius;

    echo "Radius = $radius<br>";
    echo "Area of Circle = $area";

    // 4.
    $base = 10;
    $height = 5;

    $area = 0.5 * $base * $height;

    echo "Base = $base<br>";
    echo "Height = $height<br>";
    echo "Area of Triangle = $area";

    // 5.
    $length = 8;
    $width = 6;

    $area = $length * $width;

    echo "Length = $length<br>";
    echo "Width = $width<br>";
    echo "Area of Rectangle = $area";

    // 6.
    $principal = 1000;
    $rate = 5;
    $time = 2;

    $simpleInterest = ($principal * $rate * $time) / 100;

    echo "Principal = $principal<br>";
    echo "Rate = $rate%<br>";
    echo "Time = $time years<br>";
    echo "Simple Interest = $simpleInterest";
    ?>
</body>

</html>