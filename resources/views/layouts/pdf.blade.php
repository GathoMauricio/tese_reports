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
            background-position: center;
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
        </center>

        @yield('body')
    </main>
    <footer>
        <img src="{{ public_path('img/pdf_pie_portrait.png') }}" width="100%">
    </footer>
</body>

</html>
