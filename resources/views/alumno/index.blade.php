@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-primary">
                            <div style="float:right">
                                <center>
                                    <button onclick="cargarAlumnos()" class="btn btn-primary">
                                        <i class="bi bi-cloud-arrow-up"></i> Cargar alumnos </button>
                                    <br><br>
                                    <a href="{{ route('descarga_plantilla') }}" target="_BLANK"><i
                                            class="bi bi-cloud-download"></i> Descargar plantilla</a>
                                </center>
                            </div>

                            Alumnos
                        </h5>
                    </div>

                    <div class="card-body">
                        <div style="float:right;">{{ $alumnos->links('pagination::bootstrap-4') }}</div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Matrícula</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->matricula_usuario }}</td>
                                        <td>{{ $alumno->nombre_usuario }} {{ $alumno->apaterno_usuario }}
                                            {{ $alumno->amaterno_usuario }}</td>
                                        <td>{{ $alumno->email }}</td>
                                        <td>
                                            <a href="{{ route('alumnos.edit', $alumno->id) }}" style="font-size: 22px;"
                                                class="btn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="eliminarAlumno({{ $alumno->id }})"
                                                style="font-size: 22px;" class="btn btn-danger">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                            <form action="{{ route('alumnos.destroy', $alumno->id) }}"
                                                id="form_eliminar_alumno_{{ $alumno->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float:right;">{{ $alumnos->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('alumno.cargar_alumnos')
@endsection
