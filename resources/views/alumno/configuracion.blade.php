@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Configuración
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_alumno') }}" id="form_update_alumno" method="POST" class="form">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="matricula_usuario">Matrícula</label>
                                        <input type="text" value="{{ $usuario->matricula_usuario }}" class="form-control"
                                            readonly disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="email">Email</label>
                                        <input type="text" value="{{ $usuario->email }}" class="form-control" readonly
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="nombre_usuario">Nombre del alumno</label>
                                        <input type="text" value="{{ $usuario->nombre_usuario }}" name="nombre_usuario"
                                            class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_nombre_usuario"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="apaterno_usuario">A. Paterno del alumno</label>
                                        <input type="text" value="{{ $usuario->apaterno_usuario }}"
                                            name="apaterno_usuario" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_apaterno_usuario"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="amaterno_usuario">A. Materno del alumno</label>
                                        <input type="text" value="{{ $usuario->amaterno_usuario }}"
                                            name="amaterno_usuario" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_amaterno_usuario"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-control">
                                        <label for="domicilio_usuario">Domicilio del alumno</label>
                                        <textarea name="domicilio_usuario" class="form-control">{{ $usuario->domicilio_usuario }}</textarea>
                                        <small class="texto_error text-danger" id="texto_error_domicilio_usuario"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="creditos_usuario">% de créditos cumplidos</label>
                                        <input type="text" value="{{ $usuario->creditos_usuario }}"
                                            name="creditos_usuario" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_creditos_usuario"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="telefono_usuario">Teléfono del alumno</label>
                                        <input type="text" value="{{ $usuario->telefono_usuario }}"
                                            name="telefono_usuario" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_telefono_usuario"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="nombre_empresa">Nombre de la empresa</label>
                                        <input type="text" value="{{ $usuario->nombre_empresa }}" name="nombre_empresa"
                                            class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_nombre_empresa"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="rfc_empresa">RFC de la empresa</label>
                                        <input type="text" value="{{ $usuario->rfc_empresa }}" name="rfc_empresa"
                                            class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_rfc_empresa"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control">
                                        <label for="telefono_empresa">Teléfono de la empresa</label>
                                        <input type="text" value="{{ $usuario->telefono_empresa }}"
                                            name="telefono_empresa" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_telefono_empresa"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="web_empresa">Sitio web de la empresa</label>
                                        <input type="text" value="{{ $usuario->web_empresa }}" name="web_empresa"
                                            class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_web_empresa"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="giro_empresa">Giro empresa</label>
                                        <input type="text" value="{{ $usuario->giro_empresa }}" name="giro_empresa"
                                            class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_giro_empresa"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-control">
                                        <label for="direccion_empresa">Dirección de la empresa</label>
                                        <textarea name="direccion_empresa" class="form-control">{{ $usuario->direccion_empresa }}</textarea>
                                        <small class="texto_error text-danger" id="texto_error_direccion_empresa"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="nombre_dirige_documentacion">Nombre de la persona a quien deberá
                                            dirigirse la documentación:</label>
                                        <input type="text" value="{{ $usuario->nombre_dirige_documentacion }}"
                                            name="nombre_dirige_documentacion" class="form-control">
                                        <small class="texto_error text-danger"
                                            id="texto_error_nombre_dirige_documentacion"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="cargo_dirige_documentacion">Cargo de la persona a quien deberá
                                            dirigirse la documentación:</label>
                                        <input type="text" value="{{ $usuario->cargo_dirige_documentacion }}"
                                            name="cargo_dirige_documentacion" class="form-control">
                                        <small class="texto_error text-danger"
                                            id="texto_error_cargo_dirige_documentacion"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="horario_residencia">Horario en que se realizará la residencia
                                            profesional</label>
                                        <input type="text" value="{{ $usuario->horario_residencia }}"
                                            name="horario_residencia" class="form-control">
                                        <small class="texto_error text-danger"
                                            id="texto_error_horario_residencia"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="nombre_proyecto">Nombre del proyecto</label>
                                        <input type="text" value="{{ $usuario->nombre_proyecto }}"
                                            name="nombre_proyecto" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_nombre_proyecto"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-control">
                                        <label for="beneficio_empresa">Beneficios que obtendrá la empresa</label>
                                        <textarea name="beneficio_empresa" class="form-control">{{ $usuario->beneficio_empresa }}</textarea>
                                        <small class="texto_error text-danger" id="texto_error_beneficio_empresa"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="asesor_empresa">Asesor empresa</label>
                                        <input type="text" value="{{ $usuario->asesor_empresa }}"
                                            name="asesor_empresa" class="form-control">
                                        <small class="texto_error text-danger" id="texto_error_asesor_empresa"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="asesor_tese">Asesor por parte del TESE</label>
                                        <select name="asesor_tese_id" class="form-select">
                                            <option value>--Seleccione una opción--</option>
                                            @foreach ($asesores as $asesor)
                                                @if ($usuario->asesor_tese_id == $asesor->id)
                                                    <option value="{{ $asesor->id }}" selected>
                                                        {{ $asesor->nombre_usuario }}
                                                        {{ $asesor->apaterno_usuario }} {{ $asesor->amaterno_usuario }}
                                                    </option>
                                                @else
                                                    <option value="{{ $asesor->id }}">{{ $asesor->nombre_usuario }}
                                                        {{ $asesor->apaterno_usuario }} {{ $asesor->amaterno_usuario }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <small class="texto_error text-danger" id="texto_error_asesor_tese_id"></small>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Actualizar" class="btn btn-primary"
                                        style="float: right;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <h5 class="text-primary">Contraseña</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_password_alumno', Auth::user()->id) }}" method="POST"
                                class="form">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="form-control">
                                        <label for="nombre_usuario">Contraseña</label>
                                        <input type="password" name="password" class="form-control">
                                        @error('password')
                                            <small class="texto_error text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="form-control">
                                        <label for="apaterno_usuario">Repetir contraseña</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                        @error('password_confirmation')
                                            <small class="texto_error text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Actualizar" class="btn btn-primary"
                                            style="float: right;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
