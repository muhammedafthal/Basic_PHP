<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "db1";

$connection = mysqli_connect($host, $user, $pass, $database);

if($connection) {
    echo "DB Connected.";
} else {
    echo "Failed";
}

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO contact (Name, Email, Phone) VALUES ('$name', '$email', '$phone')";

if(mysqli_query($connection, $sql)) {
    echo "Data Inserted";
} else {
    echo "Data Failed";
}

mysqli_close($connection);
