
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/gestionUsuarios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarlogueado.css') }}">
</head>
<body>



    <header class="navbar">
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

    <dialog id="loginoff" class="menu-login">
        <div class="form-login">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        </div>
    </dialog>


    <div class="container">
    <div class="search-container">
        <input type="text" id="search" placeholder="Buscar...">
        <button class="search-btn"><img src="{{ asset('img/lupa.png') }}" alt="Buscar" width="15" height="15"></button>
        <div class="filter">
            <select id="filter">
                <option value="" disabled selected>Filtrar por</option>
                <option value="makers">Makers</option>
                <option value="leader">Leader</option>
                <option value="director-general">Director General</option>
            </select>
        </div>
        <button class="modificar-btn" onclick="showModal()">Modificar</button>

    <div id="modal" class="modal" style="display:none;">



        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <form id="updateForm">
                <label for="newRole">Selecciona nuevo rol:</label>
                <select name="newRole" id="newRole">
                    <option value="makers">Makers</option>
                    <option value="leader">Leader</option>
                    <option value="director-general">Director General</option>
                </select>
                <button type="button" onclick="updateRoles()">Actualizar Roles</button>
            </form>
        </div>
    </div>

    <script>
        function showModal() {
            var selectedUsers = Array.from(document.querySelectorAll('.user-checkbox:checked')).map(checkbox => checkbox.value);
            if (selectedUsers.length === 0) {
                alert("Por favor, selecciona al menos un usuario.");
                return;
            }
            document.getElementById('modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function updateRoles() {
            var selectedUsers = Array.from(document.querySelectorAll('.user-checkbox:checked')).map(checkbox => checkbox.value);
            var newRole = document.getElementById('newRole').value;

            // Aquí enviarías los datos al servidor usando fetch o XMLHttpRequest
            // Para este ejemplo, solo cerraremos el modal
            closeModal();
            console.log("Actualizar roles para: ", selectedUsers, " a ", newRole);
            // Aquí puedes hacer una solicitud POST a tu servidor Laravel para actualizar los roles
        }

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

    </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado/Rol</th>
                <th>Seleccionar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->rol }}</td>
                <td><input type="checkbox" class="user-checkbox" value="{{ $usuario->id }}"></td>
            </tr>
            @endforeach
        </tbody>
    </table>


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
