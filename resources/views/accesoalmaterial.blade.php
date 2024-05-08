<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="{{ asset('css/navbarlogueado.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.css') }}">
</head>
</head>

<body>
    <header class="navbarlogueada">
        <nav class="nav">
            <a href="{{route('landinglog')}}" class="logo"> <img src="../img/LOGASO.png"><span class="logotexto">MAKE
                    THE<br />DIFFERENCE</a>
        </nav>
        <nav>
            <ul class="nav-menu">
                <li class="nav-menu-item"><a href="{{route('areas')}}" class="nav-menu-link">AREAS</a></li>
                <li class="nav-menu-item"><a href="{{route('gestionusuarios')}}" class="nav-menu-link">USUARIOS</a></li>
                <li class="nav-menu-item"><a href="{{route('asistencias')}}" class="nav-menu-link">ASISTENCIAS</a></li>
                <li class="nav-menu-item"><a href="{{route('materiales')}}" class="nav-menu-link">MATERIALES</a></li>

                <div class="user">
                    <li class="usericon"><i href=""><img src="../img/usuarioBContorno.png" class="usericon"></i></li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="containerareas">
            <h1>Áreas</h1>
            <div class="areas">
                <details>
                    <summary>
                        <h2>Marketing</h2>
                    </summary>
                    <div class="contentsumm">
                        <li><a href="#" data-actividad="Actividad1">Actividad1</a></li>
                        <li><a href="#" data-actividad="Actvidida2">Actividad2</a></li>
                    </div>
                </details>
                <details>
                    <summary>
                        <h2>Comunicación</h2>
                    </summary>
                    <div class="contentsumm">
                        <li><a href="#" data-actividad="Actividad1">Actividad3</a></li>
                        <li><a href="#" data-actividad="Evento1">Evento1</a></li>
                    </div>
                </details>
            </div>
        </div>

        <div class="containermaterial">
            <div class="headermaterial">
                <div class="buscar">
                    <form action="/ruta_de_busqueda" method="get">
                        <input type="search" id="searchInput" name="q" placeholder="Buscar..." required>
                        <button type="submit">Buscar</button>
                    </form>
                </div>
                <div class="file-upload">
                    <input type="file" id="fileInput" multiple>
                    <label for="fileInput">Subir Material</label>
                </div>

            </div>

            <div class="material">
                <div class="file-preview">
                    <img src="ruta_a_la_imagen" alt="Vista previa">
                    <div class="filename-container">
                        <p>Nombre_del_archivo_muy_largo_que_necesita_ser_truncado.jpg</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/material.js"></script>
</body>

</html>
