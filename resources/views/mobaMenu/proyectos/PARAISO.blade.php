<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesproyect.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="background-image">

    <nav class="navbar">
        <div class="container-fluid">
            <img src="{{ asset('Imagenes/Logomoba.png') }}" class="navbar-img-left" alt="Logo Moba">
            <div class="navbar-buttons">
                <div class="dropdown">
                    <a href="{{ route('mobaMenu.Servicios.servicios') }}"><button
                            class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </button></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="">Identidad
                                Corporativa</a></li>
                        <li><a class="dropdown-item" href="#">Avisos y Publicidad para interiores</a></li>
                        <li><a class="dropdown-item" href="#">POP y álgo más</a></li>
                    </ul>
                </div>
                <a href="" class="btn btn-primary">Contáctanos</a>
                <a href="{{ route('mobaMenu.proyectos.index') }}" class="btn btn-primary">Proyectos</a>
                <a href="#" class="btn btn-primary">Equipo de trabajo</a>
                <a href="{{ route('mobaMenu.Contacto.index') }}" class="btn btn-primary">Contáctanos</a>
            </div>
            <img src="{{ asset('Imagenes/LogoTuArte.png') }}" class="navbar-img-right" alt="Logo Tu Arte">
        </div>
    </nav>
    <div class="content">
        <div class="vertical-line left-line">
            <hr class="linea1">
            <a href="https://www.instagram.com/moba_agencia"><i class="bi bi-instagram"></i></a>
            <a href="https://www.facebook.com/MOBAcomunicacionGrafica/"><i class="bi bi-facebook"></i></a>
            <hr class="linea1">
        </div>
        //inicio de proyectos
        //proyectos cuadro
        <div class="title-container">
            <h1 class="big-title">PROYECTOS</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contenido">
                        <div class="texto">
                            <h2>Título de la sección</h2>
                            <p>Descripción breve del contenido.</p>
                        </div>
                        <div class="imagen">
                            <img src="ruta_de_la_imagen.jpg" alt="Imagen">
                        </div>
                    </div>
                    <div class="flecha">
                        <img src="ruta_de_la_imagen_de_flecha.png" alt="Flecha">
                        <i class="bi bi-chevron-compact-left"></i>
                    </div>
                </div>
            </div>
        </div>

  

    <!-- navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.querySelector('.dropdown').addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-menu').classList.add('show');
        });

        document.querySelector('.dropdown').addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-menu').classList.remove('show');
        });
    </script>

    <!--identidad y demas-->
    <script>
        let indiceCuadroActual = 1;

        function mostrarCuadroAnterior() {
            // Oculta el cuadro actual
            document.getElementById(`cuadro${indiceCuadroActual}`).style.display = 'none';

            // Actualiza el índice al cuadro anterior
            indiceCuadroActual = (indiceCuadroActual - 1) > 0 ? (indiceCuadroActual - 1) : 3;

            // Muestra el cuadro anterior
            document.getElementById(`cuadro${indiceCuadroActual}`).style.display = 'block';
        }

        function mostrarCuadroSiguiente() {
            // Oculta el cuadro actual
            document.getElementById(`cuadro${indiceCuadroActual}`).style.display = 'none';

            // Actualiza el índice al cuadro siguiente
            indiceCuadroActual = (indiceCuadroActual + 1) > 3 ? 1 : (indiceCuadroActual + 1);

            // Muestra el cuadro siguiente
            document.getElementById(`cuadro${indiceCuadroActual}`).style.display = 'block';
        }
    </script>

    <style>

        /* css de prueba*/
        .container {
            margin-top: 20px;
        }
        
        .contenido {
            display: flex;
            align-items: center;
        }
        
        .texto {
            flex: 1;
            padding-right: 20px;
        }
        
        .imagen {
            flex: 1;
        }
        
        .imagen img {
            width: 100%;
            height: auto;
        }
        
        .flecha {
            text-align: center;
            margin-top: 20px;
        }
        
        /* css de prueba*/ 
        .contenido {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 90%;
            margin-top: 10%;
            margin-left: 5%;
        }

        .active-link {
            position: relative;
            color: #2bb9e5;
        }

        .active-link:after {
            color: #2bb9e5;
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            /* Grosor de la línea */
            background-color: blue;
            /* Color de la línea */
        }

        .contenido1 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70%;
            flex-direction: column;
        }

        .titulo {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #2bb9e5;

        }

        .subtitulo {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            padding: 1%;
        }

        .subtitulo h4 {
            font-weight: bold;
            padding: 1%;
        }

        .lineatexto {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
        }

        .linea {}

        .texto {

            color: white;
        }

        .contenido2 {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            width: 100%;
            padding-top: 5%;
        }

        .creatividad {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100%;
            width: 40%;
            color: white;
        }

        .creatividad p {
            text-align: left;
        }

        .creatividad h1,
        h2 {
            text-align: justify;
        }

        .creatividad a {
            text-align: justify;
        }

        .contenedor {
            height: 100%;
            width: 40%;
            margin-left: 10%;
        }

        .contenedor h1 {
            color: #2bb9e5;
            font-weight: bold;
        }

        .contenedor h2 {
            color: white;
        }

        .contenedor p {
            color: #6094b0;
        }

        .cuadro {
            background-color: transparent;
            display: none;
            /* Por defecto, todos ocultos */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .cuadro:first-child {
            display: block;
            /* El primero visible por defecto */
        }

        .texto-cuadro {
            border: 2px solid grey;
            padding: 20px;
        }

        .cuadro .botones {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cuadro .botones h1 {
            color: white;
        }

        .texto h2 {
            margin-top: 0;
            /* Elimina el margen superior del título */
        }

        .botones {
            margin-top: 20px;
        }

        .botones button {
            margin-right: 10px;
            border: 1px solid grey;
            background-color: transparent;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>

</body>

</html>