<?php
include("connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="number" name="id" placeholder="Id">
            <input type="text" name="nombre" placeholder="Nombres">
            <input type="text" name="apellido" placeholder="Apellidos">
            <select name="tipo_documento">
                <option value="">Tipo de documento</option>
                <option value="TI">TI</option>
                <option value="CC">CC</option>
                <option value="CE">CE</option>
                <option value="RUT">RUT</option>
            </select>
            <input type="text" name="numero_documento" placeholder="Numero de documento">
            <input type="text" name="correo" placeholder="Correo">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento">
            <input type="text" name="rol" placeholder="Rol">
            <input type="text" name="contrasena" placeholder="Contraseña">
            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
       
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Tipo_documento</th>
                    <th>Numero_documento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Fecha_nacimiento</th>
                    <th>Rol</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM usuarios";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <th><?php echo $row['id']   ?></th>
                        <th><?php echo $row['nombre']   ?></th>
                        <th><?php echo $row['apellido']   ?></th>
                        <th><?php echo $row['tipo_documento']   ?></th>
                        <th><?php echo $row['numero_documento']   ?></th>
                        <th><?php echo $row['correo']   ?></th>
                        <th><?php echo $row['telefono']   ?></th>
                        <th><?php echo $row['fecha_nacimiento']   ?></th>
                        <th><?php echo $row['rol']   ?></th>
                        <th><?php echo $row['contrasena']   ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div><br><br>
    <button class="btn-print" onclick="window.print()">Imprimir Página</button>
<a href="excel.php" class="btn-download btn-excel">Descargar en Excel</a>
<a href="pdf.php" class="btn-download btn-pdf">Descargar en PDF</a><br><br>

</body>

</html>
