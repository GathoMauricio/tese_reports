@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Dashboard</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($secciones as $seccion)
                            @if ($seccion->nombre_seccion != 'ADMINISTRADOR')
                                <div class="card">
                                    <div class="card-header text-primary">
                                        {{ $seccion->nombre_seccion }}
                                        <center>
                                            Habilitado del {{ $seccion->fecha_inicio }} al {{ $seccion->fecha_fin }}
                                        </center>
                                        {{ date('Y-m-d') }}
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
                                                            @php
                                                                $fechaInicio = Carbon\Carbon::parse($seccion->fecha_inicio); //->subDay();
                                                                $fechaFin = Carbon\Carbon::parse($seccion->fecha_fin)->addDay();
                                                                $hoy = Carbon\Carbon::parse(date('Y-m-d'));
                                                            @endphp
                                                            @if ($hoy->between($fechaInicio, $fechaFin))
                                                                <a href="{{ route('generar_reporte', [Auth::user()->id, $reporte->id, $reporte->codigo_reporte]) }}"
                                                                    target="_BLANK" style="font-size: 22px;"
                                                                    class="btn btn-danger">
                                                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                                                </a>
                                                            @endif
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
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
