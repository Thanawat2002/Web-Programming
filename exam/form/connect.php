<?php
    $hostname = "localhost";
    $usename = "root";
    $password = "";
    $dbName = "bookstore";

    $conn = new mysqli($hostname, $usename, $password, $dbName);

    $conn->set_charset("utf8mb4");
    if($conn->connect_error){
        die("Connect has error !!!");
    }

?>