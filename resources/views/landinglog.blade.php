<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">

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
                <li class="usericon"><img src="../img/usuarioBlleno.png" class="usericon" onclick="toggleLoginMenu()"></li>
            </ul>
        </nav>
    </header>

    <div class="contenido">
        <div class="banner">
            <div class="capa-blanca"></div>
            <img src="../img/bannerMTD.jpg" alt="bannerimg">
        </div>
        <div class="convocatoria">
            <div class="convocatoriatexto">
                <h2>HAZ LA DIFERENCIA</h2>
                <p>¡En Make The Difference <br> buscamos alguien como tu!</p>
                <button class="unetenos"><span class="unetenostexto">¡UNETENOS!</span></button>
            </div>
            <div class="convocimg">
                <img src="../img/convocatoriaimg.png" alt="convocatoriaimg">
            </div>
        </div>
        <div class="jovenes">
            <div class="botones-jovenes">
                <div class="jovenescuadros">
                    <div class="registrados">
                        <h1 id="jregistrados" data-cantidadr="1000">1000</h1>
                        <h2>Jóvenes Registrados</h2>
                    </div>
                    <div class="voluntarios">
                        <h1 id="jvoluntarios" data-cantidadv="100">100</h1>
                        <h2>Jóvenes Voluntarios</h2>
                    </div>
                    <div class="capacitados">
                        <h1 id="jcapacitados" data-cantidadc="100">100</h1>
                        <h2>Jóvenes Capacitados</h2>
                    </div>
                </div>
            </div>
            <div class="jovenesimg">
                <img src="../img/jovenes.png" alt="jovenesimg">
            </div>
        </div>
        <div class="estadisticas">
        </div>
        <div class="banneracreditacion">
            <div class="capagris"></div>
            <img src="../img/acreditacion.png" alt="banneracreditacion">
            <div class="textoacreditacion">
                <p>ACREDITACIÓN</p>
            </div>
        </div>
        <div class="acreditacion">
            <div class="pdf-link">
                <embed src="docs/Constancia Minedu.pdf" type="application/pdf" width="420px" height="500px"
                    class="centered-pdf" />
            </div>
        </div>
    </div>

    <dialog id="loginoff" class="menu-login">
        <div class="form-login">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </dialog>

    <footer class="footer">
        <div class="logos">
            <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
            <i class="fa-brands fa-square-instagram" style="color: #ffffff;"></i>
            <i class="fa-brands fa-tiktok" style="color: #ffffff;"></i>
            <i class="fa-brands fa-square-x-twitter" style="color: #ffffff;"></i>
        </div>
        <div class="lema">
            <h1>"Nunca dudes que un pequeño grupo de ciudadanos comprometidos <br />puede cambiar el mundo. De
                hecho,
                solo
                eso
                puede lograrlo".
                <br />-Margaret Mead
            </h1>
        </div>
        <div class="contactanos">
            <h2>CONTACTANOS</h2>
            <div class="contacto-item">
                <div class="contactanoslogos">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                </div>
                <div class="contactanostexto">
                    <p>example@hotmail.com</p>
                </div>
            </div>
            <div class="contacto-item">
                <div class="contactanoslogos">
                    <i class="fa-solid fa-square-phone" style="color: #ffffff;"></i>
                </div>
                <div class="contactanostexto">
                    <p>+51 111222333</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function toggleLoginMenu() {
            var dialog = document.getElementById('loginoff');
            dialog.style.display = (dialog.style.display === 'none') ? 'block' : 'none';
        }


        var cantidadr = document.getElementById('jregistrados');
        console.log(cantidadr.dataset.cantidadr);
        var cantidadv = document.getElementById('jvoluntarios');
        console.log(cantidadv.dataset.cantidadv);
        var cantidadc = document.getElementById('jcapacitados');
        console.log(cantidadc.dataset.cantidadc);
    </script>
</body>


</html>
