<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "db1";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if($connection) {
        echo "Successfully Connected.";
    } else {
        die("Connection Failed.");
    }

    $sql = "INSERT INTO contact (Name, Email, Phone) VALUES ('Aslam', 'aslam123@email.com', '67890')";

    mysqli_query($connection, $sql);

    mysqli_connect($connection);

