@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Administradores</h5>
                    </div>

                    <div class="card-body">
                        <div style="float: right;">
                            {{ $admins->links('pagination::bootstrap-4') }}
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
                                @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $admin->nombre_usuario }}</td>
                                        <td>{{ $admin->apaterno_usuario }}</td>
                                        <td>{{ $admin->amaterno_usuario }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>
                                            <a href="{{ route('admins.edit', $admin->id) }}" style="font-size: 22px;"
                                                class="btn btn-primary">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="eliminarAdmin({{ $admin->id }})"
                                                style="font-size: 22px;" class="btn btn-danger">
                                                <i class="bi bi-trash3-fill"></i>
                                            </a>
                                            <form action="{{ route('admins.destroy', $admin->id) }}"
                                                id="form_eliminar_admin_{{ $admin->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="float: right;">
                            {{ $admins->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
