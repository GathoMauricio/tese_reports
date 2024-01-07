<html>

<head>
    <link rel="icon" href="{{ public_path('img/favicon.ico') }}" type="image/x-icon">
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {

            background-image: url({{ public_path('img/pdf_fondo_portrait.png') }});
            background-repeat: no-repeat;
            background-position: center center;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        main {
            padding: 20px;
        }

        .propiedad {
            text-decoration: underline;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <header>
        <img src="{{ public_path('img/pdf_cabecera_portrait.png') }}" width="100%">
    </header>
    <main>
        <br><br><br><br><br>
        <center>
            <b>TECNOLÓGICO DE ESTUDIOS SUPERIORES DE ECATEPEC
                <br>
                DIRECCIÓN ACADÉMICA
            </b>
            <br>
            DIVISIÓN INFORMÁTICA
            <br>
            <h4>PROPUESTA DE PROYECTO PARA RESIDENCIA PROFESIONAL</h4>
        </center>

        <div style="width:100%;text-align:right;">
            Fecha:_______________
            <br>
            Periodo escolar: _______________
        </div>
        <b>Datos generales</b>
        <br>
        Nombre del alumno:
        {{ $alumno->nombre_usuario }} {{ $alumno->apaterno_usuario }} {{ $alumno->amaterno_usuario }}
        <br><br>
        <table width="100%">
            <tr>
                <td>Matrícula: {{ $alumno->matricula_usuario }}</td>
                <td>Correo: {{ $alumno->email }}</td>
            </tr>
        </table>
        <br>
        Domicilio particular: {{ $alumno->domicilio_usuario }}
        <br><br>
        <table width="100%">
            <tr>
                <td>Matrícula: % de créditos cumplidos: {{ $alumno->creditos_usuario }}</td>
                <td>Teléfono: {{ $alumno->telefono_usuario }}</td>
            </tr>
        </table>
        <br>
        <b>Datos de la empresa donde se realizará la residencia profesional</b>
        <br>
        Nombre de la empresa: {{ $alumno->nombre_empresa }}
        <br><br>
        <table width="100%">
            <tr>
                <td>RFC: {{ $alumno->rfc_empresa }}</td>
                <td>Teléfono: {{ $alumno->telefono_empresa }}</td>
            </tr>
            <tr>
                <td>Sitio WEB: {{ $alumno->web_empresa }}</td>
                <td>Giro: {{ $alumno->giro_empresa }}</td>
            </tr>
        </table>
        <br>
        Dirección: {{ $alumno->direccion_empresa }}
        <br><br>
        Horario en que se realizará la residencia profesional: {{ $alumno->horario_residencia }}
        <br><br>
        Nombre y cargo de la persona a quien deberá dirigirse la documentación:
        {{ $alumno->nombre_dirige_documentacion }}, {{ $alumno->cargo_dirige_documentacion }}
        <br><br>
        <b>Datos del proyecto</b>
        <br>
        Nombre del proyecto a realizar: {{ $alumno->nombre_proyecto }}
        <br><br>
        Número de personas que participarán: (No más de 4 participantes)
        <table style="width: 100%;" border="1">
            <tr>
                <td style="text-align: center;">NOMBRE </td>
                <td style="text-align: center;">CARRERA</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <br>
        Beneficios que obtendrá la empresa: {{ $alumno->beneficio_empresa }}
        <br><br>
        Asesor por parte de la empresa: {{ $alumno->asesor_empresa }}
        <br><br>
        Asesor por parte del TESE: {{ $alumno->asesor->nombre_usuario }} {{ $alumno->asesor->apaterno_usuario }}
        {{ $alumno->asesor->amaterno_usuario }}
        <br>
        <div style="width: 100%;height:150px;"></div>
        (Esta área será llenada por el Comité de Residencias Profesionales)
        <br><br><br><br><br>
        <table style="width:100%">
            <tr>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Mtra. Verónica Martínez Martínez.
                        <br>
                        Jefa de la División Informática
                        <br>
                        AUTORIZACIÓN
                    </b>
                </td>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Ing. José Luis Limón Sánchez.
                        <br>
                        Responsable de Residencias Profesionales
                    </b>
                </td>
            </tr>
        </table>
        <br><br>
        <center>
            <b>Vo. Bo. COMITÉ DE RESIDENCIAS PROFESIONALES</b>
            <br><br><br>
            <b>Presidentes de academia y jefatura de división.</b>
        </center>
        <br><br><br><br><br>
        <table style="width:100%">
            <tr>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Mtra. Verónica Martínez Martínez.
                        <br>
                        Jefa de la División Informática.
                    </b>
                </td>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Mtro. Delis Hernández Lara.
                        <br>
                        Presidente de Academia de Cómputo.
                    </b>
                </td>
            </tr>
        </table>
        <br><br><br><br><br>
        <table style="width:100%">
            <tr>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Mtra. Hilada Rojas Chávez
                        <br>
                        Presidente de Academia Económico
                        <br>
                        Administrativo.
                    </b>
                </td>
                <td style="text-align: center;">
                    ______________________
                    <br>
                    <b>
                        Mtro. Gerardo Nava Serrano.
                        <br>
                        Presidente de Academia de Ciencias Básicas.
                    </b>
                </td>
            </tr>
        </table>
        <br><br>
        <table style="width: 100%" border="1">
            <tr>
                <td>Elaboró</td>
                <td>Revisó</td>
                <td>Vo. Bo.:</td>
            </tr>
            <tr>
                <td width="33%">
                    <br><br><br>
                    <b>
                        C. Alumna(o):
                        <br>
                        {{ $alumno->nombre_usuario }} {{ $alumno->apaterno_usuario }} {{ $alumno->amaterno_usuario }}
                    </b>
                </td>
                <td width="33%">
                    <br><br><br>
                    <b>
                        Ing. José Luis Limón Sánchez.
                        <br>
                        Responsable de Residencias Profesionales
                    </b>
                </td>
                <td width="33%">
                    <br><br><br>
                    <b>
                        Mtra. Verónica Martínez Martínez.
                        <br>
                        Jefa de la División Informática
                    </b>
                </td>
            </tr>
        </table>
        <br>
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
    </main>
    <footer>
        <img src="{{ public_path('img/pdf_pie_portrait.png') }}" width="100%">
    </footer>
</body>

</html>
