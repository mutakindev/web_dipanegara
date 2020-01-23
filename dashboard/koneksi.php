<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "stmikdipanegara";

    $kon = mysqli_connect($servername, $username, $password, $dbname);
    if (!$kon){
        die("Connection failed: " .mysqli_connect_error());
    }

?>