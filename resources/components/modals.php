<!-- Modal de Agregado de Imagenes en Slider-->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header blue-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar imágenes</h4>
      </div>
      <div class="modal-body">
        <form id="uploader-slider" name="uploader-slider" action="../../../app/controllers/uploader-slider.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input type="file" name="uploadedfile" class="form-control">
            <span class="help-block">Solo se permiten archivos en formato JPG o PNG, con un tamaño máximo de 2MB</span>
          </div>
          <div class="form-group">
            <label for="titulo" class="control-label">Título</label>
            <input type="text" name="titulo" required placeholder="Título del Slider" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
          <div class="form-group">
            <label for="descripcion" class="control-label">Descripción</label>
            <input type="text" name="descripcion" required placeholder="Descripción del Slider" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
          <div class="form-group">
            <label for="alt" class="control-label">Texto alternativo</label>
            <input type="text" name="alt" required placeholder="Texto alternativo" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" form="uploader-slider" class="btn btn-success">Guardar</button>
      </form>
      </div>
    </form>
  </div>
</div>
</div>
<!-- Modal de eliminación de imágenes -->

<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header red-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar imágenes</h4>
      </div>
      <div class="modal-body">
        <h4>¿Realmente desea eliminar este contenido? Esta acción es irreversible</h4>
      </div>
      <div class="modal-footer">
      <form method="POST" id="deleteSlider">
        <input type="number" name="idSliderDelete" id="idSliderDelete" value hidden>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </form>
      </div>
  </div>
</div>
</div>