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
    <link rel="stylesheet" href="../../output.css" />
    <title>Users CRUD</title>
</head>

<style>
    .main {
        background-image: none;
    }
</style>

<body class="main">
    <div>
        <!-- HEADER -->
        <div class="flex justify-center text-center">
            <header 
            class="my-4 w-2/3 rounded-xl bg-gradient-to-r from-Light-Blue to-Fucsia p-1.5 text-center text-[#DFE4EBEF] shadow-md"
            >
                <h1 
                class="text-[26px] font-semibold">
                Estudiantes registrados
                </h1>
            </header>
        </div>
        <!------------------------------>
        <!-- TABLA ESTUDIANTES -->
        <div class="flex justify-center">
            <table class="border-2 border-neutral-400 dark:border-neutral-700 w-4/5">
                <thead>
                    <tr class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center dark:bg-[#242528] bg-slate-400/70 font-bold h-8 dark:text-slate-200">
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">ID</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Nombre</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Apellido</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Tipo_Doc</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Numero_Doc</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Correo</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Telefono</th>
                        <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Fecha_Nac</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM usuarios WHERE rol = 1"; 
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="border border-neutral-400 text-xs text-center dark:bg-[#27282be8] bg-slate-300/75 dark:text-[#dfe4ebef]">
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['id']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['nombre']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['apellido']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['tipo_documento']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['numero_documento']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['correo']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['telefono']   ?></th>
                            <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5"><?php echo $row['fecha_nacimiento']   ?></th>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
