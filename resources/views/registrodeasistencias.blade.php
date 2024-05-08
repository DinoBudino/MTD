<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="{{ asset('css/navbarlogueado.css') }}">
    <link rel="stylesheet" href="{{ asset('css/asistencias.css') }}">
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
                    <li class="usericon"><i href=""><img src="../img/usuarioBContorno.png"
                                class="usericon"></i></li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="areas">
            <h2>Áreas</h2>
            <div class="area">
                <h3>Marketing</h3>
                <ul>
                    <li><a href="#" data-actividad="Actividad1">Actividad1</a></li>
                    <li><a href="#" data-actividad="Actividad2">Actividad2</a></li>
                </ul>
            </div>
            <div class="area">
                <h3>Comunicación</h3>
                <ul>
                    <li><a href="#" data-actividad="Actividad3">Actividad3</a></li>
                    <li><a href="#" data-actividad="Evento1">Evento1</a></li>
                </ul>
            </div>
        </div>

        <div class="asistencias">
        <div class="asistencias-header">
            <h2 id="nombre-actividad">Actividad1</h2>
            <input type="text" id="buscar-usuario" placeholder="Buscar">
            <button id="guardar-registro">Guardar registro</button>
        </div>
        <div class="lista-usuarios">
            <!-- Aquí se cargarán los alumnos dinámicamente -->
        </div>
    </div>
    </div>
    <script src="../js/asistencias.js"></script>
</body>
</html>
