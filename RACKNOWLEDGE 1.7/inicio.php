<?php
session_start();

$mysqliConnect = new mysqli('localhost', 'root', '', 'registro');
if (!$mysqliConnect) {
    echo "Error al conectar a la base de datos";
}

$correo = $_POST['email'];
$contrasena = $_POST['pass'];

$consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = mysqli_query($mysqliConnect, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);
    if (password_verify($contrasena, $fila['contrasena'])) {
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['nombre_usuario'] = $fila['nombre'];
        header("Location: home.html"); 
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Correo no encontrado";
}

mysqli_close($mysqliConnect);
?>