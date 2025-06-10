<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <form action="get&post_methd.php" method="GET">
        <label for="name">Enter Your Name</label><br>
        <input type="text" name="name" id="name"><br>
        <input type="submit">
    </form>
    <?php 
    
    $name = $_GET["name"];
    echo "Entered Name Is: $name";
    
    ?>
</body>
</html>