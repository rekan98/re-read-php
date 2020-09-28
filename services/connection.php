<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "reread-php";

$conn = mysqli_connect($host,$user, $pass, $db);

if (!$conn){
    echo "Error: No se pudo conectar a MySql." . PHP_EOL;
    echo "Error de depuracion " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

?>