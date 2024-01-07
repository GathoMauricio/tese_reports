@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Mis alumnos</h5>
                    </div>

                    <div class="card-body">
                        <div style="float:right;">
                            {{ $alumnos->links('pagination::bootstrap-4') }}
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Empresa</th>
                                    <th>Proyecto</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $key => $alumno)
                                    <tr>
                                        <td>{{ $alumno->nombre_usuario }}
                                            {{ $alumno->apaterno_usuario }}
                                            {{ $alumno->amaterno_usuario }}
                                        </td>
                                        <td>{{ $alumno->email }}</td>
                                        <td>{{ $alumno->nombre_empresa }}</td>
                                        <td>{{ $alumno->nombre_proyecto }}</td>

                                        <td>
                                            <a href="{{ route('ver_alumno', $alumno->id) }}" style="font-size: 22px;"
                                                class="btn btn-primary">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float:right;">
                            {{ $alumnos->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
