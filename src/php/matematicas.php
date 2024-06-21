<?php
require '../vista_admin/crud_temas/app/config/database.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematicas</title>
    <link rel="stylesheet" href="../output.css" />
    <link
      rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css"
    />
</head>

<style>
    .main {
        background-image: none;
    }

    .main::-webkit-scrollbar {
    display: inherit;
  }
</style>

<body class="main py-2"> 
    
<div>
      <i
        class="fi fi-br-angle-left cursor-pointer rounded-full bg-gradient-to-r from-Light-Blue to-Fucsia p-2 pb-[5px] pr-[9px]"
        onclick="regresar()"
      ></i>
    </div>

    <!-- HEADER -->
    <div class="flex justify-center text-center">
      <header
        class="my-4 w-2/3 rounded-xl bg-gradient-to-r from-Light-Blue to-Fucsia p-1.5 text-center text-[#DFE4EBEF] shadow-md"
      >
        <h1 class="text-[26px] font-semibold">Matematicas</h1>
      </header>
    </div>

    <!-- 2DO HEADER -->
    <div class="my-1 flex justify-center text-center">
      <div class="text-xl font-medium dark:text-[#DFE4EBEF]">
        Despierta tu curiosidad
      </div>
    </div>

    <!-- PARRAFO -->
    <div class="mb-6 mt-2 flex justify-center text-center">
      <div class="dark:text-[#dfe4ebf6]">
        En este apartado vas a encontrar diferentes datos interesantes y
        llamativos sobre matematicas
      </div>
    </div>


    <div class="">
        <div class="">
            <div class="grid grid-cols-2 gap-4 mx-auto max-w-4xl justify-items-center">
                <!-- Aquí se mostrará la imagen, el título y la descripción -->
                <?php
                require '../vista_admin/crud_temas/app/config/database.php';
                $sql = "SELECT * FROM informacion WHERE id_asignaturas = 2";
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="justify-items-center rounded-xl bg-slate-300/70 dark:bg-[#27282be8] w-[280px]">';
                    echo '<div class="grid-cards p-3">';
                    // Asegúrate de que la ruta de la imagen sea correcta y esté apuntando al directorio correcto
                    echo '<div class="h-min rounded-xl bg-[#FFFFFF]/[0.40] p-4 dark:bg-[#242528]"><img class="rounded-xl object-cover w-full" src="../vista_admin/crud_temas/app/datos/imagen/' . $row['id'] . '.jpg" alt="Imagen de la asignatura" style="max-width: 300px; max-height: 300px;"></div>';
                    echo '<h2 class="text-center rounded-xl bg-[#FFFFFF]/[0.40] px-4 py-1 font-medium dark:bg-[#242528] dark:text-[#dfe4eb] text-lg">' . $row['nombre'] . '</h2>';
                    echo '<div class="text-center dark:text-[#dfe4ebf6]">';
                    echo '<p>' . $row['descripcion'] . '</p>';
                    echo '</div> ';
                    echo '</div>';
                    echo '</div>';
                }

                // Cierra la conexión a la base de datos
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Otros elementos HTML y scripts que puedas necesitar -->
    <script>
      function regresar() {
        window.location.href = "../vista_est/datos_curiosos/datos_carrusel.html";
      }
    </script>
</body>
</html>