<?php
session_start();

$mysqliConnect = new mysqli('localhost', 'root', '', 'racknowledge');
if ($mysqliConnect->connect_error) {
    die("Error al conectar a la base de datos: " . $mysqliConnect->connect_error);
}

$correo = $_POST['email'];
$contrasena = $_POST['pass'];

$consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = $mysqliConnect->query($consulta);

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($contrasena, $fila['contrasena'])) {
        $_SESSION['usuario_autenticado'] = true;
        $_SESSION['nombre_usuario'] = $fila['nombre'];
        $_SESSION['rol_usuario'] = $fila['rol'];
        $_SESSION['login_exitoso'] = true;

        switch ($fila['rol']) {
            case '1':
                header("Location: home_estu.html");
                exit();
            case '2':
                header("Location: home_prof.html");
                exit();
            case '3':
                header("Location: home_admin.html");
                exit();
            default:
                header("Location: error.html");
                exit();
        }
    } else {
        $_SESSION['login_exitoso'] = false;
        $errors[] = 'Contraseña incorrecta';
    }
} else {
    $_SESSION['login_exitoso'] = false;
    $errors[] = 'Correo no encontrado';
}

// Cerrar conexión
$mysqliConnect->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/inicio2.css">
</head>
<body>
    <?php
    // Mostrar errores
    foreach ($errors as $error) {
        echo '<div id="error-box">';
        echo '<div class="dot"></div>';
        echo '<div class="dot two"></div>';
        echo '<div class="face2">';
        echo '<div class="eye"></div>';
        echo '<div class="eye right"></div>';
        echo '<div class="mouth sad"></div>';
        echo '</div>';
        echo '<div class="shadow move"></div>';
        echo '<div class="message">';
        echo '<h1 class="alert red">Error!</h1>';
        echo '<p>' . $error . '</p>';
        echo '</div>';
        echo '<a href="inicio.html"><button class="button-box"><h1 class="red">Regresar</h1></button></a>';
        echo '</div>';
    }
    ?>
</body>
</html>
