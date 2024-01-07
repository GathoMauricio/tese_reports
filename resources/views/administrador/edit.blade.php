@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-primary">Editar</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admins.update', $admin->id) }}" method="POST" class="form">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-control">
                                        <label for="email">Email</label>
                                        <input type="text" value="{{ $admin->email }}" class="form-control" readonly
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-control">
                                    <label for="nombre_usuario">Nombre del administrador</label>
                                    <input type="text" value="{{ $admin->nombre_usuario }}" name="nombre_usuario"
                                        class="form-control">
                                    @error('nombre_usuario')
                                        <small class="texto_error text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-control">
                                    <label for="apaterno_usuario">A. Paterno del administrador</label>
                                    <input type="text" value="{{ $admin->apaterno_usuario }}" name="apaterno_usuario"
                                        class="form-control">
                                    @error('apaterno_usuario')
                                        <small class="texto_error text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-control">
                                    <label for="amaterno_usuario">A. Materno del administrador</label>
                                    <input type="text" value="{{ $admin->amaterno_usuario }}" name="amaterno_usuario"
                                        class="form-control">
                                    @error('amaterno_usuario')
                                        <small class="texto_error text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
