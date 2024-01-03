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
                        <center>{{ $asesores->links('pagination::simple-tailwind') }}</center>
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
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <center>{{ $asesores->links('pagination::simple-tailwind') }}</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
