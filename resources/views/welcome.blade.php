<html lang="en">

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    <header class="navbar">
        <nav class="nav">
            <a href="{{route('landinglog')}}" class="logo"> <img src="../img/LOGASO.png"><span class="logotexto">MAKE
                    THE<br />DIFFERENCE</a>
        </nav>
        <nav>
            <ul class="nav-menu">
                <div class="user">
                    <li class="usericon"><i href=""><img src="../img/usuarioBContorno.png" class="usericon"
                                onclick="toggleLoginMenu()"></i></li-class>
                </div>

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
                <p>¡En Make The Difference  <br> buscamos alguien como tu!</p>
                <button class="unetenos">
                    <a href="{{route('register')}}" class="unetenos-boton">
                    <span class="unetenostexto" style="color: #ffffff">¡UNETENOS!</span>
                   </a>
                </button>
            </div>
            <div class="convocimg">
                <img src="{{ asset('img/convocatoriaimg.png') }}" alt="convocatoriaimg">
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
            <img src="{{ asset('img/acreditacion.png') }}" alt="banneracreditacion">
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


            <form action="{{ route('login') }}" method="post">
                @csrf <!-- Token CSRF necesario -->
                <div class="llenar">
                    <div class="formemail">
                        <h1>Correo</h1>
                        <input type="email" name="correo" placeholder="Ingresa tu correo" required>
                    </div>
                    <div class="formpassw">
                        <h1>Contraseña</h1>
                        <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                </div>

                <div class="buttonmenulogin">
                    <div class="login">
                        <button type="submit" class="login">Iniciar Sesión</button>
                    </div>
                    <div class="register">
                        <a href="{{route('register')}}" class="register"><span>Regístrate</span></a>
                    </div>
                    <div class="forgotpsw">
                        <a>¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </form>


        </div>
    </dialog>


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
</body>

