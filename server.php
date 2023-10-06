<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "register_db";

    //crate conection

    $conn = mysqli_connect($servername, $username,  $password, $dbname);

    if (!$conn) {
        die("failed" . mysqli_connect_error());    
    }

?>