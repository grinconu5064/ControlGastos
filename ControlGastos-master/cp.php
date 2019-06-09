<?php
$conexion = mysqli_connect("localhost","root","root","controlgastos");
if (!$conexion) {
    echo "error";
}
else{
    echo "conec";
}