<?php

$host = 'controlgastosean.mysql.database.azure.com';
$username = 'TestAdminControl@controlgastosean';
$password = 'ControlGastos1';
$db_name = 'controlgastos';

//Establishes the connection
$conexion = mysqli_init();
mysqli_real_connect($conexion, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

?>