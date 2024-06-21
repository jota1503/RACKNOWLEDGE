<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../output.css" />
        <link
        rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css"/>
        <title>Editar usuarios</title>
        
    </head>

    <style>
    .main {
        background-image: none;
    }

    .main::-webkit-scrollbar {
    display: inherit;
  }

    .wrap {
        max-width: 120px;
        overflow: hidden;
        word-wrap: break-word;
        padding: 6px;
    }

    .grid-btns-crud {
        grid-template-columns: auto auto;
    }

    ::-webkit-calendar-picker-indicator {
    background-color: #7776ff;
    border-radius: 5px;
    transition-duration: 300ms;
    padding: 4px;
    }

    ::-webkit-calendar-picker-indicator:hover {
    cursor: pointer;
    transition-duration: 300ms;
    background-color: #ae2cf1;
    }

</style>

    <body class="main m-0 overflow-y-scroll py-2">
        <div>
            <div>
                <i
                class="fi fi-br-angle-left cursor-pointer rounded-full bg-gradient-to-r from-Light-Blue to-Fucsia p-2 pb-[5px] pr-[9px]"
                onclick="regresar()">
                </i>
            </div>
            <div>
                <form action="edit_user.php" method="POST">
                    <div class="grid grid-rows-11 gap-3 justify-items-center">
                        <div>
                            <input type="hidden" name="id" value="<?= $row['id']?>" class="h-11 w-[320px] rounded-xl border-none dark:text-[#E2E8F0] bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="nombre" placeholder="Nombres" value="<?= $row['nombre']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="apellido" placeholder="Apellidos" value="<?= $row['apellido']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <select name="tipo_documento" value="<?= $row['tipo_documento']?>" class="h-11 w-[320px] text-gray-500 dark:text-[#7a8190] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                <option value="">Tipo de documento</option>
                                <option value="TI">TI</option>
                                <option value="CC">CC</option>
                                <option value="CE">CE</option>
                                <option value="RUT">RUT</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" name="numero_documento" placeholder="Numero de documento" value="<?= $row['numero_documento']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="correo" placeholder="Correo" value="<?= $row['correo']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento" value="<?= $row['fecha_nacimiento']?>"  class="text-gray-500 dark:text-[#7a8190] h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="rol" placeholder="Rol" value="<?= $row['rol']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="text" name="contrasena" placeholder="Contraseña" value="<?= $row['contrasena']?>" class="h-11 w-[320px] dark:text-[#E2E8F0] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                        </div>
                        <div>
                            <input type="submit" value="Actualizar" class="rounded-[9px] bg-gradient-to-r from-Light-Blue to-Fucsia px-4 py-[7px] text- font-[450] text-slate-100 hover:cursor-pointer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
        function regresar() {
        window.location.href = "./users.php";
        }
        </script>
    </body>
</html>