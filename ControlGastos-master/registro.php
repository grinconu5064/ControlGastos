<?php
include 'cp.php';

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

$insertar = "INSERT INTO usuario(nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre',
'$apellidos', '$correo', '$usuario',' $clave', '$telefono')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo 'Error al registrarse';

} else {

    echo 'usuario resgistrado existosamente';
}


mysqli_close($conexion);