<!-- Modal Cargar Alumnos-->
<div class="modal fade" id="cargar_alumnos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-primary" id="exampleModalLabel">
                    Seleccione la plantilla de Excel
                </h5>
            </div>
            <form action="{{ route('carga_plantilla') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="plantilla" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cargar</button>
                </div>
            </form>
        </div>
    </div>
</div>
