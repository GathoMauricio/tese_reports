@extends('layouts.pdf')
@section('body')
    <br>
    <div style="float:right;text-align:right;">
        <b>CARTA COMPROMISO</b>
        <br>
        Ecatepec de Morelos, Edo. de Méx. a {{ date('d') }} de {{ Carbon\Carbon::parse(date('d-m-Y'))->monthName }} del
        {{ date('Y') }}
    </div>
    <br><br><br>
    <p>
        El que suscribe, alumna(o): <b>{{ $alumno->nombre_usuario }} {{ $alumno->apaterno_usuario }}
            {{ $alumno->amaterno_usuario }}</b> de esta Institución con número de matrícula
        <b>{{ $alumno->matricula_usuario }}</b> de la carrera de Informática,
        quien realizará su residencia profesional en <b>{{ $alumno->nombre_empresa }}</b>, durante el periodo comprendido
        <b>{{ $alumno->periodo_comprendido }}</b> en un horario
        de <b>{{ $alumno->horario_residencia }}</b>, se compromete a:
    </p>
    <br><br>
    <ul>
        <li style="padding: 10px;">
            Concluir satisfactoriamente su actividad de Residencia Profesional.
        </li>
        <li style="padding: 10px;">
            Cumplir con las actividades asignadas y presentar los informes bimestrales correspondientes
        </li>
        <li style="padding: 10px;">
            Atender los derechos y obligaciones establecidos en la empresa.
        </li>
        <li style="padding: 10px;">
            Acatar las políticas institucionales que legitiman al Tecnológico, mismas que se encuentran
            plasmadas en su Ley de Creación, en el Reglamento Interior y en el Reglamento de Residencias
            Profesionales.
        </li>
        <li style="padding: 10px;">
            Cumplir con el procedimiento establecido para la acreditación de la residencia profesional.
        </li>
    </ul>
    <br><br><br>
    Se firma la presente a los
    <br><br><br><br><br><br>
    <table style="width:100%">
        <tr>
            <td style="text-align: center;">
                <b>Atentamente:</b>
                <br><br><br><br>
                ____________________________
                <br>
                <b>
                    {{ $alumno->nombre_usuario }}
                    {{ $alumno->apaterno_usuario }}
                    {{ $alumno->amaterno_usuario }}
                </b>
            </td>
            <td style="text-align: center;">
                <b>Vo. Bo.:</b>
                <br><br><br><br>
                ____________________________
                <br>
                <b>
                    {{ $alumno->asesor->nombre_usuario }}
                    {{ $alumno->asesor->apaterno_usuario }}
                    {{ $alumno->asesor->amaterno_usuario }}
                </b>
            </td>
        </tr>
    </table>
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
