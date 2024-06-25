<?php
session_start();

$link = mysqli_connect('sql300.infinityfree.com', 'if0_36782738', 'MMh0nDS7RTgj', 'if0_36782738_racknowledge');
if (!$link) {
    echo "Error al conectar a la base de datos";
}

$nombre_Reg = $_POST["nombre_Reg"];
$apellido_Reg = $_POST["apellido_Reg"];
$formselect_tip_doc = $_POST["formselect_tip_doc"];
$n_doc_Reg = $_POST["n_doc_Reg"];
$email_Reg = $_POST["email_Reg"];
$tel_Reg = $_POST["tel_Reg"];
$day = $_POST['day'];
$mes = $_POST['mes'];
$year = $_POST['year'];
$pass_Reg = $_POST["pass_Reg"];
$form_select_rol = $_POST["form_select_rol"];

//crear cadena fecha YY-MM-DD
$f_nac_Reg = "$year-$mes-$day";

// Mapear valores del formulario a los IDs de los roles
$rol_mapping = array(
    "est" => 1,  // ID del rol para Estudiante
    "prof" => 2, // ID del rol para Profesor
    "admin" => 3 // ID del rol para Administrador
);

$rol_id = isset($rol_mapping[$form_select_rol]) ? $rol_mapping[$form_select_rol] : null;



$contrasena_hash = password_hash($pass_Reg, PASSWORD_DEFAULT);

$insertar = "INSERT INTO usuarios (nombre, apellido, tipo_documento, numero_documento, correo, telefono, fecha_nacimiento, rol, contrasena) VALUES ('$nombre_Reg', '$apellido_Reg', '$formselect_tip_doc', '$n_doc_Reg', '$email_Reg', '$tel_Reg', '$f_nac_Reg', '$rol_id', '$contrasena_hash')";

if (mysqli_query($link, $insertar)) {
    $_SESSION['usuario_autenticado'] = true;
    $_SESSION['nombre_usuario'] = $nombre_Reg;
    header("Location: inicio.html");
    exit();
} else {
    echo "Error al guardar los datos: " . mysqli_error($link);
}

mysqli_close($link);
?>