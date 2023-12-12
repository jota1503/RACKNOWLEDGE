<?php

session_start();

require '../config/database.php';

$id = $conn->real_escape_string($_POST['id']);


$sql = "DELETE FROM informacion WHERE id=$id";

if ($conn->query($sql)) {

    $dir = "imagen";
    $imagen = $dir .'/'. $id . '.jpg';

    if(file_exists($imagen)){
        unlink($imagen);
    }

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro eliminado";
} else {

    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar registro";
}

header('Location: index.php');