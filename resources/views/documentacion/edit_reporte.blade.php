<!-- Modal Edit Reporte-->
<div class="modal fade" id="edit_reporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-primary" id="exampleModalLabel">
                    Actualizar Reporte
                </h5>
            </div>
            <form action="{{ route('update_reporte') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="reporte_id" id="txt_reporte_id">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nombre_reporte">
                                    Nombre del reporte
                                </label>
                                <input type="text" name="nombre_reporte" id="txt_nombre_reporte" class="form-control"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>  --}}
                </div>
            </form>
        </div>
    </div>
</div>
