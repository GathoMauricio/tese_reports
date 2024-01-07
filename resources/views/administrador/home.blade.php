@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Dashboard</h5>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header"><a href="{{ route('admins.index') }}">Administradores</a>
                                        </div>
                                        <div class="card-body">
                                            <img src="{{ asset('img/admin_img.png') }}"
                                                alt="{{ asset('img/admin_img.png') }}" width="100%" height="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header"><a href="{{ route('asesores.index') }}"> Asesores</a>
                                        </div>
                                        <div class="card-body">
                                            <img src="{{ asset('img/asesor_img.png') }}"
                                                alt="{{ asset('img/asesor_img.png') }}" width="100%" height="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header"><a href="{{ route('alumnos.index') }}">Alumnos</a></div>
                                        <div class="card-body">
                                            <img src="{{ asset('img/alumno_img.png') }}"
                                                alt="{{ asset('img/alumno_img.png') }}" width="100%" height="200">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header"><a href="{{ route('documentacion') }}">Documentación</a>
                                        </div>
                                        <div class="card-body">
                                            <img src="{{ asset('img/config_img.png') }}"
                                                alt="{{ asset('img/config_img.png') }}" width="100%" height="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
