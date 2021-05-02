<?php

    //database configuration
    $host       = "localhost";
    $user       = "makosh24";
    $pass       = "Madi5234240795";
    $database   = "shopapp";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

?>