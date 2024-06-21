<!-- Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" aria-labelledby="nuevoModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="nuevoModalLabel">Agregar registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guarda.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
<label for="nombre" class="form-label">Nombre:</label>
<input type="text" name="nombre" id="nombre" class="form-control" required>
</div>

<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion:</label>
    <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
</div>


<div class="mb-3">
<label for="asignatura" class="form-label">Asignatura:</label>
<select name="asignatura" id="asignatura" class="form-select" required>
<option value="">Seleccionar...</option>
<?php while($row_asignaturas = $asignaturas->fetch_assoc()) { ?>
    <option value="<?php echo $row_asignaturas["id"]; ?>"><?= $row_asignaturas["nombre"] ?> </option>
<?php } ?>
</select> 
</div>

<div class="mb-3">
<label for="imagen" class="form-label">Imagen:</label>
<input type="file" name="imagen" id="imagen" class="form-control" accept="image/jpeg">
</div>

<div class="">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
<button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>

</div>



        </form>
      </div>
    
    </div>
  </div>
</div>