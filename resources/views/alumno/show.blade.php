@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">
                            Alumno:
                            {{ $alumno->nombre_usuario }}
                            {{ $alumno->apaterno_usuario }}
                            {{ $alumno->amaterno_usuario }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-primary">Información</h5>
                            </div>
                            <div class="card-body">
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Matrícula:</td>
                                        <td>{{ $alumno->matricula_usuario }}</td>
                                    </tr>
                                    <tr>
                                        <td>Créditos aprobados:</td>
                                        <td>{{ $alumno->creditos_usuario }}%</td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono del alumno:</td>
                                        <td>{{ $alumno->telefono_usuario }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email del alumno:</td>
                                        <td>{{ $alumno->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre de la empresa:</td>
                                        <td>{{ $alumno->nombre_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Giro de la empresa:</td>
                                        <td>{{ $alumno->giro_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Asesor de la empresa:</td>
                                        <td>{{ $alumno->asesor_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono de la empresa:</td>
                                        <td>{{ $alumno->telefono_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sitio WEB de la empresa:</td>
                                        <td>{{ $alumno->web_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Dirección d ela empresa:</td>
                                        <td>{{ $alumno->direccion_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nombre del proyecto:</td>
                                        <td>{{ $alumno->nombre_proyecto }}</td>
                                    </tr>
                                    <tr>
                                        <td>Beneficio para la empresa:</td>
                                        <td>{{ $alumno->beneficio_empresa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Horario de residencia:</td>
                                        <td>{{ $alumno->horario_residencia }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="text-primary">Documentación</h5>
                            </div>
                            <div class="card-body">
                                @foreach ($secciones as $seccion)
                                    <div class="card">
                                        <div class="card-header text-primary">
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
                                                                <a href="{{ route('generar_reporte', [$alumno->id, $reporte->id, $reporte->codigo_reporte]) }}"
                                                                    target="_BLANK" style="font-size: 22px;"
                                                                    class="btn btn-danger">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                                                </a>
                                                            </td>
                                                            {{--  <td width="10%">
                                                                    <a href="#" style="font-size: 22px;"
                                                                        class="btn btn-primary">
                                                                        <i class="bi bi-pencil-square"></i>
                                                                    </a>
                                                                </td>  --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
