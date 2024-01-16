@extends('layouts.pdf')
@section('body')
    <br>
    <div style="float:right;text-align:right;">
        OFICIO No.____________
        <br>
        Ecatepec de Morelos, Edo. de Méx. a {{ date('d') }} de {{ Carbon\Carbon::parse(date('d-m-Y'))->monthName }} del
        {{ date('Y') }}
        <br>
        <b>ASIGNACIÓN DE ASESORÍA DE</b>
        <br>
        <b>RESIDENCIA PROFESIONAL</b>
    </div>
    <br><br><br><br><br><br>
    <b>Profesor:</b> {{ $alumno->asesor->nombre_usuario }} {{ $alumno->asesor->apaterno_usuario }}
    {{ $alumno->asesor->amaterno_usuario }}
    <br><br>
    Presente.
    <br><br>
    <p>
        Me dirijo a usted para informarle que, de acuerdo con los lineamientos que rigen el plan de estudios
        del Tecnológico de Estudios Superiores de Ecatepec referentes a la residencia profesional, ha sido usted
        designado como ASESOR por parte de esta Institución, del alumna(o): <b>{{ $alumno->nombre_usuario }}
            {{ $alumno->apaterno_usuario }} {{ $alumno->amaterno_usuario }}</b>, con matrícula
        <b>{{ $alumno->matricula_usuario }}</b>
        , quien
        realizará dicha residencia profesional durante el periodo comprendido del ____________ al __________ en la empresa
        <b>{{ $alumno->nombre_empresa }}</b>, ubicada en <b>{{ $alumno->direccion_empresa }}</b>.
        <br><br>
        El proyecto a desarrollar es: <b>{{ $alumno->nombre_proyecto }}</b>
        <br><br>
        Agradeceré a usted se sirva brindar el mayor apoyo al alumno citado, con el fin de hacer posible que
        éste cumpla con los objetivos perseguidos con dicha actividad.
        <br><br><br><br><br><br>
        Atentamente.
        <br><br><br><br><br><br>
        <b>
            Mtra. Verónica Martínez Martínez.
            <br>
            Jefa de la División Informática.
        </b>
    </p>
    <br><br><br>
    <table>
        <tr>
            <td style="padding: 5px;font-size:10px;">
                <small>c.c.p</small>
            </td>
            <td style="padding: 5px;font-size:10px;">
                <small>
                    Responsable de Residencias Profesionales de la División Informática.
                    <br>
                    FO-TESE-DA-46-RES01
                </small>
            </td>
        </tr>
    </table>
@endsection
