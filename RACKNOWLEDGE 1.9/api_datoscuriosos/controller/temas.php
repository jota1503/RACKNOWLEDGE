<?php
header('Content-Type: application/json');
require_once("../config/conexion.php");
require_once("../models/Temas.php");
$temas = new Temas();

$body = json_decode(file_get_contents("php://input"), true);

switch($_GET["op"]){
    case "GetAll":
        $datos = $temas->get_temas();
        echo json_encode($datos);
        break;
    case "Getid":
        $informacion = $temas->get_soporte_tecnico_x_id($body["id"]);
        echo json_encode($informacion);
        break;
    case "Insert":
        $temas->insertar_informacion($body["nombre"],$body["descripcion"],$body["id_asignaturas"],$body["fecha_alta"]);
        echo json_encode("Insert Correcto");
        break;
        case "Update":
            $temas->update_informacion($body["nombre"], $body["descripcion"], $body["id_asignaturas"], $body["fecha_alta"], $body["id"]);
            echo json_encode("Update Correcto");
            break;        
    case "Delete":
        $temas->delete_informacion($body["id"]);
        echo json_encode("Delete Correcto");
        break;
}


?>