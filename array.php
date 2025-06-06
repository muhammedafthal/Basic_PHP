<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php 
        // Indexed Arrays.
        # Here we are using (index value).
        $fruits = array("banana", "grapes", "orange", "kiwi");

        for($i=0; $i<count($fruits); $i++) {
            echo $fruits[$i];
            echo "<br>";
        }

        // Associate Arrays
        # Here we are using (key value).
        $country = array("IN"=>"India", "SL"=>"Sri Lanka", "UK"=>"United Kingdom");
        echo $country["IN"]."<br>";

        foreach($country as $c => $c_value) {
            echo $c_value."<br>";
        }
    ?>
</body>
</html>