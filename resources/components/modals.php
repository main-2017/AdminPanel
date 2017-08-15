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
        <form id="uploader-slider" name="uploader-slider" action="modals_submit" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
          <div class="form-group">
            <input type="file" name="filePicker" class="form-control">
            <span class="help-block">Solo se permiten archivos en formato JPG o PNG, con un tamaño máximo de 200MB</span>
          </div>
          <div class="form-group">
            <label for="titulo" class="control-label">Título</label>
            <input type="text" name="titulo"  placeholder="Título del Slider" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
          <div class="form-group">
            <label for="descripcion" class="control-label">Descripción</label>
            <input type="text" name="descripcion"  placeholder="Descripción del Slider" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
          <div class="form-group">
            <label for="alt" class="control-label">Texto alternativo</label>
            <input type="text" name="alt"  placeholder="Texto alternativo" class="form-control">
            <span class="help-block">Máximo 100 caracteres</span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" data-dismiss="modal">Guardar</button>
      </div>
    </div>

  </div>
</div>