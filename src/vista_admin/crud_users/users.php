<?php
include("connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="es">

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

    .main::-webkit-scrollbar {
    display: inherit;
  }

    .grid-crud-users {
        grid-template-rows: auto auto auto;
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

<body class="main m-0 overflow-y-scroll pb-[22px]">
    <div>
        <div class="grid grid-crud-users gap-12">
            <!-- CREAR USUARIO -->
            <div>
                <!-- HEADER -->
                <div class="flex justify-center text-center">
                    <header 
                    class="my-4 w-2/3 rounded-xl bg-gradient-to-r from-Light-Blue to-Fucsia p-1.5 text-center text-[#DFE4EBEF] shadow-md"
                    >
                        <h1 
                        class="text-[26px] font-semibold">
                        Crear Usuario
                        </h1>
                    </header>
                </div>
                <!------------------------------>
                <!-- FORMULARIO NUEVO USUARIO -->
                <div>
                    <div class="flex justify-center">
                        <form action="insert_user.php" method="POST">
                            <div class="grid grid-rows-11 gap-3 justify-items-center">
                                <div>
                                    <input type="number" name="id" placeholder="ID" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="nombre" placeholder="Nombres" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="apellido" placeholder="Apellidos" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <select name="tipo_documento" class="h-11 w-[320px] text-gray-500 dark:text-[#7a8190] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                        <option value="">Tipo de documento</option>
                                        <option value="TI">TI</option>
                                        <option value="CC">CC</option>
                                        <option value="CE">CE</option>
                                        <option value="RUT">RUT</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="text" name="numero_documento" placeholder="Numero de documento" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="correo" placeholder="Correo" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="telefono" placeholder="Telefono" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="date" name="fecha_nacimiento" placeholder="fecha de nacimiento" class="text-gray-500 dark:text-[#7a8190] h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="rol" placeholder="Rol" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="text" name="contrasena" placeholder="Contraseña" class="h-11 w-[320px] rounded-xl border-none bg-slate-300/60 font-normal outline-none focus:bg-[#FFFFFF] focus:ring-2 focus:ring-Light-Blue dark:bg-[#27282be8] dark:placeholder:text-[#7a8190] dark:focus:bg-[#242528] S1:h-[60px] S1:w-[480px] S1:rounded-[17px] S1:px-5 S1:py-4 S1:text-[20px] S2:h-[50px] S2:w-[400px] S2:rounded-[14px] S2:px-4 S2:py-3 S2:text-[18px] S3:h-11 S3:w-[320px] S3:rounded-xl S3:px-3 S3:py-2 S3:text-[16px]">
                                </div>
                                <div>
                                    <input type="submit" value="Agregar" class="rounded-[9px] bg-gradient-to-r from-Light-Blue to-Fucsia px-4 py-[7px] text- font-[450] text-slate-100 hover:cursor-pointer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!------------------------------>
            </div>
            <!-------------------------->
            <!-- USUARIOS REGISTRADOS -->
            <div>
                <!-- HEADER -->
                <div class="flex justify-center text-center">
                    <header 
                    class="my-4 w-2/3 rounded-xl bg-gradient-to-r from-Light-Blue to-Fucsia p-1.5 text-center text-[#DFE4EBEF] shadow-md"
                    >
                        <h1 
                        class="text-[26px] font-semibold">
                        Usuarios registrados
                        </h1>
                    </header>
                </div>
                <!------------------>
                <!-- TABLA -->
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
                                <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Rol</th>
                                <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Contraseña</th>
                                <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM usuarios";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <tr class="border border-neutral-400 text-xs text-center dark:bg-[#27282be8] bg-slate-300/75 dark:text-[#dfe4ebef]">
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["id"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["nombre"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["apellido"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["tipo_documento"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["numero_documento"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["correo"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["telefono"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["fecha_nacimiento"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?php echo $row["rol"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal wrap"><?php echo $row["contrasena"]; ?></th>
                                    <th class="border-2 border-neutral-400 dark:border-neutral-700 font-normal p-1.5">
                                        <div class="grid grid-btns-crud gap-4">
                                            <div>
                                                <a href="update.php?id=<?= $row["id"] ?>" class="bg-teal-500 p-1.5 rounded-[4px]">Editar</a>
                                            </div>
                                            <div>
                                                <a href="delete_user.php?id=<?= $row["id"] ?>" class="bg-rose-500 p-1.5 rounded-[4px]">Eliminar</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!------------------>
            </div>
            <!-------------------------->
            <!-- BOTONES DESCARGAR/IMPRIMIR -->
            <div>
                <div class="grid grid-cols-3 gap-4 justify-items-center">
                    <div>
                        <button class="rounded-[9px] bg-zinc-700 px-4 py-[7px] font-[450] text-slate-100 hover:cursor-pointer" onclick="window.print()">Imprimir Página</button>
                    </div>
                    <div>
                        <a href="excel.php">
                            <button class="rounded-[9px] bg-green-600 px-4 py-[7px] font-[450] text-slate-100 hover:cursor-pointer">Descargar en Excel</button>
                        </a>
                    </div>
                    <div>
                        <a href="pdf.php">
                            <button class="rounded-[9px] bg-red-600 px-4 py-[7px] font-[450] text-slate-100 hover:cursor-pointer">Descargar en PDF</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-------------------------->
        </div>
    </div>
</body>

