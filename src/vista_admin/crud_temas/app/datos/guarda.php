<?php

session_start();

require '../config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$asignatura = $conn->real_escape_string($_POST['asignatura']);

$sql = "INSERT INTO informacion (nombre, descripcion, id_asignaturas, fecha_alta)
VALUES ('$nombre', '$descripcion', $asignatura, NOW())";
if($conn->query($sql)){
    $id = $conn->insert_id;

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro guardado";

    if($_FILES['imagen']['error'] == UPLOAD_ERR_OK){
        $permitidos = array("image/jpg", "image/jpeg");
        if(in_array($_FILES['imagen']['type'], $permitidos)){

            $dir = "../datos/imagen";

            $info_img = pathinfo($_FILES['imagen']['name']);
            $extension = $info_img['extension']; // Obtenemos la extensión del archivo

            // Construimos el nombre de la imagen utilizando la ID y la extensión del archivo
            $imagen = $dir . '/' . $id . '.' . $extension;

            if(!file_exists($dir)){
                mkdir($dir, 0777, true); // Creamos el directorio si no existe
            }

            if(!move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen)) {
                $_SESSION['color'] = "danger";
                $_SESSION['msg'] .= "<br>Error al guardar la imagen";
            } else {
                // Actualizamos la base de datos con la ruta de la imagen
                $sql_update = "UPDATE informacion SET imagen = '$imagen' WHERE id = $id";
                $conn->query($sql_update);
            }
        } else {
            $_SESSION['color'] = "danger";
            $_SESSION['msg'] .= "<br>Formato de imagen no permitido";
        }
    }
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al guardar imagen";
}

header('Location: index.php');
?>
