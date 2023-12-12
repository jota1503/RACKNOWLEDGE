<?php

require '../config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "SELECT id, nombre, descripcion, id_asignaturas FROM informacion WHERE id=$id LIMIT 1";
$resultado = $conn->query($sql);
$rows = $resultado->num_rows;

$informacion = [];

if($rows > 0) {
    $informacion = $resultado->fetch_array();
}

echo json_encode($informacion, JSON_UNESCAPED_UNICODE);
