<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "earth_db";

    $connect = mysqli_connect($servername, $username, $password, $dbname);
    echo "Connected to DB";
    if(!$connect) {
        die ("DB connection failed:" . mysqli_connect_error());
    }
?>