<?php 
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "earth_db";

    $connect = mysqli_connect($servername, $user, $pass, $dbname);
    
    if(!$connect) {
        die ("DB connection failed:" . mysqli_connect_error());
    }
?>