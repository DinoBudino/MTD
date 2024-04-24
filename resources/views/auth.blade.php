<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>

    <header class="navbar">
        <nav class="nav">
            <a href="{{route('welcome')}}" class="logo"> <img src="../img/LOGASO.png"><span class="logotexto">MAKE
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

    <main class="container">
        <section class="rectangulo">
            <img src="../img/LOGASO.png" class="logo" alt="Logo">
            <h1>Regístrate</h1>


            <form action="{{ route('crearUsuario') }}" method="post">
                @csrf <!-- Token CSRF -->
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                    @error('nombre')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                    @error('telefono')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>


                <div class="input-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>
                    @error('correo')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirmar contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="boton-registrar"><span>Registrar</span></button>
            </form>


        </section>
    </main>




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

</html>
