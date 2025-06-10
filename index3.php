<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php
        echo "Arithemetic-Operations:<br>";  
        $x = 10;
        $y = 3; 
        echo "Value of X: 10 <br> Value of Y: 3 <br>";
    
        echo "Addition: " . ($x + $y) . "<br>";
        echo "Subtraction: " . ($x - $y) . "<br>";
        echo "Multiplication: " . ($x * $y) . "<br>";
        echo "Division: " . ($x / $y) . "<br>";
        echo "Modulus: " . ($x % $y) . "<br>";
        echo "Increment: " . (++$x) . "<br>";
        echo "Decrement: " . (--$x) . "<br>";

        # Here the exponentiation is doing 10*10.
        # If it is ($x**3) then 10*10*10.
        echo "Exponentiation: " . ($x**2) . "<br>";
    ?>

</body>
</html>