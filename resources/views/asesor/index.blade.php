@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Asesores</h5>
                    </div>

                    <div class="card-body">
                        <div style="float: right;">
                            {{ $asesores->links('pagination::bootstrap-4') }}
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>A. Paterno</th>
                                    <th>A. Materno</th>
                                    <th>Email</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asesores as $asesor)
                                    <tr>
                                        <td>{{ $asesor->nombre_usuario }}</td>
                                        <td>{{ $asesor->apaterno_usuario }}</td>
                                        <td>{{ $asesor->amaterno_usuario }}</td>
                                        <td>{{ $asesor->email }}</td>
                                        <td>
                                            <a href="{{ route('asesores.edit', $asesor->id) }}" style="font-size: 22px;"
                                                class="btn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="eliminarAsesor({{ $asesor->id }})"
                                                style="font-size: 22px;" class="btn btn-danger">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                            <form action="{{ route('asesores.destroy', $asesor->id) }}"
                                                id="form_eliminar_asesor_{{ $asesor->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float: right;">
                            {{ $asesores->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
