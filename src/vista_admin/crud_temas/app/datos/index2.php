<?php
session_start();
require '../config/database.php';
$sqlAsignaturas = "SELECT p.id, p.nombre, p.descripcion, g.nombre AS asignaturas FROM informacion AS p
INNER JOIN asignaturas AS g ON p.id_asignaturas=g.id";
$asignaturas = $conn->query($sqlAsignaturas);
$dir = "imagen/";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas</title>
    <link rel="stylesheet" href="../../../../output.css" />
    <style>
      .main {
        background-image: none;
      }
      .main::-webkit-scrollbar {
        display: inherit;
      }
      .grid-btns-crud {
        grid-template-columns: auto auto;
      }
    </style>
  </head>
  <body class="main">
    <div class="flex justify-center">
      <header class="my-4 w-2/3 rounded-xl bg-gradient-to-r from-Light-Blue to-Fucsia p-1.5 text-center text-[#DFE4EBEF] shadow-md">
        <h1 class="text-[26px] font-semibold">
          Temas
        </h1>
      </header>
    </div>
    <div class="flex justify-center ">

      <!-- TEMAS REGISTRADOS -->
      <section>
        <table class="border-2 border-neutral-400 dark:border-neutral-700">
          <thead class="">
            <tr class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center dark:bg-[#242528] bg-slate-400/70 font-bold h-8 dark:text-slate-200">
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">#</th>
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Nombre</th>
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Descripcion</th>
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Asignatura</th>
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Imagen</th>
              <th class="border-2 border-neutral-400 dark:border-neutral-700 p-1.5">Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row_asignaturas = $asignaturas->fetch_assoc()) { ?>
            <tr class="border border-neutral-400 text-xs text-center dark:bg-[#27282be8] bg-slate-300/75 dark:text-[#dfe4ebef]">
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?= $row_asignaturas['id']; ?></td>
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?= $row_asignaturas['nombre']; ?></td>
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?= $row_asignaturas['descripcion']; ?></td>
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5"><?= $row_asignaturas['asignaturas']; ?></td>
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs font-normal p-1.5"><img src="<?= $dir .$row_asignaturas['id'] . '.jpg?n=' . time(); ?> " width="200" class=""></td>
              <td class="border-2 border-neutral-400 dark:border-neutral-700 text-xs text-center font-normal p-1.5">
                <div class="grid grid-btns-crud gap-2 py-1.5">
                  <div>
                    <a href="#" class="bg-teal-500 p-1.5 rounded-[4px]" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row_asignaturas['id']; ?>">
                      Editar</a>
                  </div>
                  <div>
                    <a href="#" class="bg-rose-500 p-1.5 rounded-[4px]" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row_asignaturas['id']; ?>">
                      Eliminar</a>
                  </div>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </section>

      <!----------------------->
    </div>
    <div class="flex justify-center">

      <!-- BOTON NUEVO REGISTRO -->
      <section class="py-8">
        <div>
          <?php if(isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>
          <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['msg']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php 
                unset($_SESSION['color']);
                unset($_SESSION['msg']);
              } ?>
          <div class="">
            <div class="">
              <a href="#" class="rounded-[9px] bg-green-600 px-4 py-[7px] font-[450] text-slate-100 hover:cursor-pointer" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                Nuevo registro
              </a>
            </div>
          </div>
        </div>
      </section>

      <!----------------------->
    </div>
  </body>
</html>