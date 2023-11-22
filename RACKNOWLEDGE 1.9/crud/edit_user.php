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
$contrasena = $_POST['contrasena'];

$sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', tipo_documento='$tipo_documento', numero_documento='$numero_documento', correo='$correo', telefono='$telefono', fecha_nacimiento='$fecha_nacimiento', rol='$rol', contrasena='$contrasena' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>