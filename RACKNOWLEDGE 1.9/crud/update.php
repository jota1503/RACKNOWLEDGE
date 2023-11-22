<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']?>">
    <input type="text" name="nombre" placeholder="Nombres" value="<?= $row['nombre']?>">
    <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>">
    <select name="tipo_documento" value="<?= $row['tipo_documento']?>">
                            <option value="">Tipo de documento</option>
                            <option value="TI">TI</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="RUT">RUT</option>
    <input type="text" name="numero_documento" placeholder="Numero de documento" value="<?= $row['numero_documento']?>">
    <input type="text" name="correo" placeholder="Correo" value="<?= $row['correo']?>">
    <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
    <input type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?= $row['fecha_nacimiento']?>">
    <input type="text" name="rol" placeholder="Rol" value="<?= $row['rol']?>">
    <input type="text" name="contrasena" placeholder="Contraseña" value="<?= $row['contrasena']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>