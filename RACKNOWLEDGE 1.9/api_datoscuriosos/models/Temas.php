<?php
class Temas extends conectar{
    public function get_temas(){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM informacion";
        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_soporte_tecnico_x_id($id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM informacion where id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_informacion($nombre, $descripcion, $id_asignaturas, $fecha_alta, $id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "UPDATE informacion SET 
        nombre = ?,
        descripcion = ?,
        id_asignaturas = ?,
        fecha_alta = ?
        WHERE id = ?";
    
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $nombre);
        $sql->bindValue(2, $descripcion);
        $sql->bindValue(3, $id_asignaturas);
        $sql->bindValue(4, $fecha_alta);
        $sql->bindValue(5, $id); // Añadir este enlace para el id
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function insertar_informacion($nombre, $descripcion, $id_asignaturas, $fecha_alta){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO informacion (nombre, descripcion, id_asignaturas, fecha_alta)
    VALUES (?, ?, ?, ?)";

        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $nombre);
        $sql->bindValue(2, $descripcion);
        $sql->bindValue(3, $id_asignaturas);
        $sql->bindValue(4, $fecha_alta);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function delete_informacion($id){
        $conectar= parent::conexion();
        parent::set_names();
        $sql = "DELETE from informacion where
        id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    }

?>