@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-primary">Documentación</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($secciones as $seccion)
                            @if ($seccion->nombre_seccion != 'ADMINISTRADOR')
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <a href="javascript:void(0)"
                                            onclick="editarSeccion({{ $seccion->id }},'{{ $seccion->fecha_inicio }}','{{ $seccion->fecha_fin }}')"
                                            style="float:right">Actualizar
                                            fechas</a>
                                        {{ $seccion->nombre_seccion }}
                                        <center>
                                            Habilitado del {{ $seccion->fecha_inicio }} al {{ $seccion->fecha_fin }}
                                        </center>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                @foreach ($reportes->where('seccion_id', $seccion->id) as $reporte)
                                                    <tr>
                                                        <td width="90%">
                                                            <b>{{ $reporte->codigo_reporte }}</b> -
                                                            {{ $reporte->nombre_reporte }}
                                                        </td>
                                                        <td width="10%">
                                                            <a href="javascript:void(0)"
                                                                onclick="editarReporte({{ $reporte->id }},'{{ $reporte->nombre_reporte }}')"
                                                                style="font-size: 22px;" class="btn btn-primary">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('documentacion.edit_seccion')
    @include('documentacion.edit_reporte')
@endsection
