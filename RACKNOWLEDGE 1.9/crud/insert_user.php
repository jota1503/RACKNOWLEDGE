<?php
include("connection.php");
$con = connection();


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipo_documento = $_POST['tipo_documento'];
$numero_documento = $_POST['numero_documento'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$rol = $_POST['rol'];
$contrasena = $_POST['contraseña'];

$sql = "INSERT INTO usuarios VALUES('$id', '$nombre', '$apellido', '$tipo_documento', $numero_documento, '$correo', '$telefono', '$fecha_nacimiento', '$rol', '$contrasena')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>