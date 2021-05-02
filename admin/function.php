<?php
$servername = "localhost";
$username = "makosh24";
$password = "Madi5234240795";
$dbname = "shopapp";

function connect(){
    $conn = mysqli_connect("localhost", "makosh24", "Madi5234240795", "shopapp");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function init(){
    //вывожу список товаров
    $conn = connect();
    $sql = "SELECT * FROM goods";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}