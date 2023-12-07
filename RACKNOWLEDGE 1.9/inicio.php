<link href="css/inicio2.css" rel="stylesheet">

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
        $_SESSION['login_exitoso'] = true;  // Nueva variable de sesión para indicar éxito
        ?>
        <div id="success-box">
            <div class="dot"></div>
            <div class="dot two"></div>
            <div class="face">
                <div class="eye"></div>
                <div class="eye right"></div>
                <div class="mouth happy"></div>
            </div>
            <div class="shadow scale"></div>
            <div class="message">
                <h1 class="alert green">NICE!</h1>
                <p>Perfecto, tu cuenta ha sido verificada.</p>
            </div>
            <a href="home.html"><button class="button-box"><h1 class="green">continuar</h1></button>
        </div>
        <?php
    } else {
        $_SESSION['login_exitoso'] = false;  // Alerta cuando se escribe mal la contraseña
        ?>
        <div id="error-box">
            <!-- Contenido de la alerta roja -->
            <div class="dot"></div>
            <div class="dot two"></div>
            <div class="face2">
                <div class="eye"></div>
                <div class="eye right"></div>
                <div class="mouth sad"></div>
            </div>
            <div class="shadow move"></div>
            <div class="message">
                <h1 class="alert red">Error!</h1>
                <p>Tu cuenta no ha sido encontrada, asegurate de que te hayas escrito tu contraseña bien o te hayas registrado, si persiste el problema comunicate con el soporte tecnico.</p>
            </div>
            <a href="inicio.html"><button class="button-box"><h1 class="red">Regresar</h1></button>
        </div>
        <?php
    }
} else {
    $_SESSION['login_exitoso'] = false;  // alerta error de correo incorrecto
    ?>
    <div id="error-box">
        <!-- Contenido de la alerta roja -->
        <div class="dot"></div>
        <div class="dot two"></div>
        <div class="face2">
            <div class="eye"></div>
            <div class="eye right"></div>
            <div class="mouth sad"></div>
        </div>
        <div class="shadow move"></div>
        <div class="message">
            <h1 class="alert red">Error!</h1>
            <p>Porfavor verifica que hayas escrito correctamente tu correo.</p>
        </div>
        <a href="inicio.html"><button class="button-box"><h1 class="red">Regresar</h1></button>
    </div>
    <?php
}

mysqli_close($mysqliConnect);
?> 