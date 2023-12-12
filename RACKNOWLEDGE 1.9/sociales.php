<?php
require 'crud_temas/app/config/database.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociales</title>
    <link rel="stylesheet" href="css/curioso.css">
    <!-- Otros enlaces de estilo y scripts que puedas necesitar -->
</head>
<body> 
    </div>
    <div class="container">
        <div class="row">
            <div class="heading-section">
                <!-- Aquí se mostrará la tabla -->
                <?php
                $sql = "SELECT * FROM informacion where id_asignaturas= 5";
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
                    echo '<div style="text-align: center;">';
                    echo '<h2 style="font-size: 24px; font-family: Arial, sans-serif;">' . $row['nombre'] . '</h2>';
                    echo '<p><p><p>' . $row['descripcion'] . '</p>';
                    echo '</div>';
                }

                // Cierra la conexión a la base de datos
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Otros elementos HTML y scripts que puedas necesitar -->
</body>
</html>
