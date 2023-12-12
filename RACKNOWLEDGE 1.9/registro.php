<?php
$mysqliConnect = new mysqli('localhost', 'root', '', 'racknowledge');
if (!$mysqliConnect) {
    echo "Error al conectar a la base de datos";
}

$nombre_Reg = $_POST["nombre_Reg"];
$apellido_Reg = $_POST["apellido_Reg"];
$formselect_tip_doc = $_POST["formselect_tip_doc"];
$n_doc_Reg = $_POST["n_doc_Reg"];
$email_Reg = $_POST["email_Reg"];
$tel_Reg = $_POST["tel_Reg"];
$f_nac_Reg = $_POST["f_nac_Reg"];
$form_select_rol = $_POST["form_select_rol"];
$pass_Reg = $_POST["pass_Reg"];


$contrasena_hash = password_hash($pass_Reg, PASSWORD_DEFAULT);

$insertar = "INSERT INTO usuarios (nombre, apellido, tipo_documento, numero_documento, correo, telefono, fecha_nacimiento, rol, contrasena) VALUES ('$nombre_Reg', '$apellido_Reg', '$formselect_tip_doc', '$n_doc_Reg', '$email_Reg', '$tel_Reg', '$f_nac_Reg', '$form_select_rol', '$contrasena_hash')";

if (mysqli_query($mysqliConnect, $insertar)) {
    session_start();
    $_SESSION['usuario_autenticado'] = true;
    $_SESSION['nombre_usuario'] = $nombre_Reg;
    header("Location: inicio.html");
    exit();
} else {
    echo "Error al guardar los datos: " . mysqli_error($mysqliConnect);
}
