<!-- Modal Edit Seccion-->
<div class="modal fade" id="edit_seccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-primary" id="exampleModalLabel">
                    Actualizar Sección
                </h5>
            </div>
            <form action="{{ route('update_seccion') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="seccion_id" id="txt_seccion_id">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_inicio">
                                    Fecha inicio
                                </label>
                                <input type="date" name="fecha_inicio" id="txt_fecha_inicio" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_fin">
                                    Fecha fin
                                </label>
                                <input type="date" name="fecha_fin" id="txt_fecha_fin" class="form-control" required>
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
