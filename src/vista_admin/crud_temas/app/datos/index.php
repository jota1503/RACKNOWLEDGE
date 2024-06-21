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
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #525252;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <div class="container py-3">
      <h2 class="text-center">Temas</h2>
      <hr>
      <?php if(isset($_SESSION['msg']) && isset($_SESSION['color'])) { ?>
      <div class="alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['msg']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php 
    unset($_SESSION['color']);
    unset($_SESSION['msg']);
    } ?>
      <div class="row justify-content-end">
        <div class="col-auto">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal">
            <i class="fa-solid fa-circle-plus"></i> Nuevo registro
          </a>
        </div>
      </div>
      <table class="table table-sm table-striped table-hover mt-4">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Asignatura</th>
            <th>Imagen</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row_asignaturas = $asignaturas->fetch_assoc()) { ?>
          <tr>
            <td><?= $row_asignaturas['id']; ?></td>
            <td><?= $row_asignaturas['nombre']; ?></td>
            <td><?= $row_asignaturas['descripcion']; ?></td>
            <td><?= $row_asignaturas['asignaturas']; ?></td>
            <td><img src="<?= $dir .$row_asignaturas['id'] . '.jpg?n=' . time(); ?> " width="200"></td>
            <td>
              <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editaModal" data-bs-id="<?= $row_asignaturas['id']; ?>"><i class="fa-solid fa-pen-to-square"></i>
                Editar</a>
              <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-id="<?= $row_asignaturas['id']; ?>"><i class="fa-solid fa-trash"></i>
                Eliminar</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php
        $sqlAsignaturas = "SELECT id, nombre FROM asignaturas";
        $asignaturas = $conn->query($sqlAsignaturas);
        ?>
      <?php include 'nuevoModal.php'; ?>
      <?php $asignaturas->data_seek(0); ?>
      <?php include 'editaModal.php'; ?>
      <?php include 'eliminaModal.php'; ?>
      <script>
        let nuevoModal = document.getElementById('nuevoModal')
        let editaModal = document.getElementById('editaModal')
        let eliminaModal = document.getElementById('eliminaModal')
        nuevoModal.addEventListener('shown.bs.modal', event => {
          nuevoModal.querySelector('.modal-body #nombre').focus()
        })
        nuevoModal.addEventListener('hide.bs.modal', event => {
          nuevoModal.querySelector('.modal-body #nombre').value = ""
          nuevoModal.querySelector('.modal-body #descripcion').value = ""
          nuevoModal.querySelector('.modal-body #asignatura').value = ""
          nuevoModal.querySelector('.modal-body #imagen').value = ""
        })
        editaModal.addEventListener('hide.bs.modal', event => {
          editaModal.querySelector('.modal-body #nombre').value = ""
          editaModal.querySelector('.modal-body #descripcion').value = ""
          editaModal.querySelector('.modal-body #asignatura').value = ""
          editaModal.querySelector('.modal-body #img_imagen').value = ""
          editaModal.querySelector('.modal-body #imagen').value = ""
        })
        editaModal.addEventListener('shown.bs.modal', event => {
          let button = event.relatedTarget
          let id = button.getAttribute('data-bs-id')
          let inputId = editaModal.querySelector('.modal-body #id')
          let inputNombre = editaModal.querySelector('.modal-body #nombre')
          let inputDescripcion = editaModal.querySelector('.modal-body #descripcion')
          let inputAsignaturas = editaModal.querySelector('.modal-body #asignatura')
          let imagen = editaModal.querySelector('.modal-body #img_imagen')
          let url = "getAsignaturas.php"
          let formData = new FormData()
          formData.append('id', id)
          fetch(url, {
              method: "POST",
              body: formData
            }).then(response => response.json())
            .then(data => {
              inputId.value = data.id
              inputNombre.value = data.nombre
              inputDescripcion.value = data.descripcion
              inputAsignaturas.value = data.id_asignaturas
              imagen.src = '<?= $dir ?>' + data.id + '.jpg'
            }).catch(err => console.log(err))
        })
        eliminaModal.addEventListener('shown.bs.modal', event => {
          let button = event.relatedTarget
          let id = button.getAttribute('data-bs-id')
          eliminaModal.querySelector('.modal-footer #id').value = id
        })
      </script>
      <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>