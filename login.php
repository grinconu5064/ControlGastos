<?php
include 'cp.php';

$message = "";
$user = $_POST["username"];
$password = $_POST["password"];

$consultar = "SELECT * FROM usuarios WHERE EMAIL = '$user' AND Password = '$password'";

$stmt = mysqli_prepare($conexion, $consultar);
if (!$stmt) {
    $message = "Se genero un error al validar los datos, contacte con el administrador.";
} else {
    mysqli_stmt_execute($stmt);
    $stmt->store_result();

    if($stmt->num_rows <= 0){
        $message = "Datos Incorrectos, valide los datos y intente de nuevo.";
    }

    mysqli_stmt_close($stmt);
}

if($message != ""){
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>window.history.back(-1);</script>";
}
else {
    echo "<script>window.location.href= '/dashboard.html';</script>";
}

mysqli_close($conexion);
exit();
?>