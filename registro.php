<?php
ob_start();
include 'cp.php';

$message = "Se registro con Exito!!!!";
$Redirect = true;

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$identificacion = $_POST["identificacion"];
$clave = $_POST["clave"];

$insertar = "INSERT IGNORE INTO usuarios VALUES ('','$nombre', '$apellidos', 'OTH', '$identificacion', '$correo', '$clave')";

$stmt = mysqli_prepare($conexion, $insertar);
if (!$stmt) {
    $message = "Se genero un error al registrar contacte con el administrador.";
    $Redirect = false;
} else {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

echo "<script type='text/javascript'>alert('$message');</script>";

if($Redirect){
    echo "<script>window.location.href= '/login.html';</script>";
}
else {
    echo "<script>window.history.back(-1);</script>";
}

mysqli_close($conexion);
exit();
ob_end_flush();
?>