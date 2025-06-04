<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php

        # Variable store in PHP.
        # And also we can ReAssign the value if we want.
        $text = "Hello PHP";        
        $number = 1000;
        $flNumber = 1.657;        
        $php = true;        
        $var1 = NULL;

        # By this way we are printing anything in PHP.
        echo $text;
        echo "<br>";        
        echo $number;
        echo "<br>";        
        echo $flNumber;
        echo "<br>";        
        echo $php;
        echo "<br>";        
        echo $var1;

        $name = "Muhammed Afthal K";
        $age = 22;

        # We can also use variable name inide our text.
        echo "My name is $name <br>";
        echo "Iam $age years old";

        echo "<br>";

        # By using this method called "var_dumb()". We will get which variable type and. If it is string we will get how many character in it.
        echo var_dump($var1);
        echo "<br>";

        # Here we create an "constand variable" called "PI".
        # We "can't reassign" this value once we create.
        define("PI", 3.14);
        echo PI;

    ?>
</body>
</html>