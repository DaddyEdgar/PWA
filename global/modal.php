<!-- MODAL EDITAR -->
<div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="php/actializar.php">
                <div class="modal-body">
                    <input type="hidden" name="id" id="update_id">
                    <div class="form-group">
                        <label class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" name="editar_nombre" id="editar_nombre" required onkeypress="return validarletras(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="editar_descripcion" id="editar_descripcion" required onkeypress="return validarletras(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Precio:</label>
                        <input type="text" class="form-control" name="editar_precio" id="editar_precio" required onkeypress="return solonumeros(event)" onpaste="return false">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Fecha:</label>
                        <input type="date" class="form-control" name="editar_fecha" id="editar_fecha" required>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Estado:</label>
                        <select name="editar_estado" id="editar_estado" class="custom-select" required>
                            <option value="Disponible">Disponible</option>
                            <option value="No disponible">No disponible</option>
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MODAL EDITAR-->