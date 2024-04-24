<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/areas.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/actividades.css">
    <link rel="stylesheet" href="../css/participantes.css">
    <link rel="stylesheet" href="../css/crearactividad.css ">
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
                <div class="user">
                    <li class="usericon"><i href=""><img src="../img/usuarioBlleno.png" class="usericon"
                                onclick="toggleLoginMenu()"></i></li-class>
                </div>

            </ul>
        </nav>
    </header>

    <dialog id="addp" class="menu-participantes">
        <div class="navigation-bar">
            <input type="text" placeholder="">
            <div class="navigation-icons">
                <i class="fas fa-search"></i>
                <i class="fas fa-filter"></i>
                <i class="fas fa-check-square"></i>
            </div>
        </div>
        <div class="addpar">
            <form>
                <div class="user-row" style="background-color: #F4C22E;">
                    <div class="user-icon">
                        <div class="nomuser">
                            <i class="fas fa-user"></i>
                            <span>Josefina, Maker</span>
                        </div>
                        <div class="checkuser">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                </div>
                <div class="user-row" style="background-color: #ED117F;">
                    <div class="user-icon">
                        <div class="nomuser">
                            <i class="fas fa-user"></i>
                            <span>Josefino, Leader</span>
                        </div>
                        <div class="checkuser">
                            <i class="far fa-square"></i>
                        </div>
                    </div>
                </div>
        </div>
        <div class="botonespart">
            <button class="cancel-btn" style="background-color: #3DB6B1;"
                onclick="closeParticipantesMenu(event)">Cancelar</button>
            <button class="confirm-btn" style="background-color: #92297C;">Confirmar</button>
        </div>
        </form>
        </div>
    </dialog>
    <dialog id="filterOptions" class="filter-dialog">
        <div class="filter-options">
            <ul>
                <li style="background-color: #F4C22E;">Makers</li>
                <li style="background-color: #ED117F;">Leaders</li>
            </ul>
        </div>
    </dialog>
    <div class="contenedor">
        <div class="areas">
            <h1><span>Areas</span>
                <i class="fa-regular fa-square-plus" id="plus-icon" style="color: #000000; cursor: pointer;"></i>
            </h1>
            <ul class="areaslista">
                <li><button class="marketingboton">Marketing <div class="iconbuttons"> <i class="fa-solid fa-palette"
                                style="color: #000000;"></i><i class="fa-solid fa-x" style="color: #000000;"></i></div>
                    </button>
                </li>
            </ul>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const plusIcon = document.getElementById("plus-icon");
                    plusIcon.addEventListener("click", function () {
                        const areasLista = document.querySelector(".areaslista");
                        const newButton = document.createElement("button");
                        newButton.textContent = "Areas";
                        newButton.classList.add("Areasboton");
                        const newListItem = document.createElement("li");
                        newListItem.appendChild(newButton);
                        areasLista.appendChild(newListItem);
                    });
                });
            </script>
        </div>
        <div class="actividadesgeneral">
            <div class="actividadestabla">
                <table>
                    <tr class="columnastitulos">
                        <th class="activ"><i class="fa-solid fa-list" style="color: #000000;"></i>
                            <p>Actividades</p>
                        </th>
                        <th class="estado"><i class="fa-solid fa-list-check" style="color: #000000;"></i>
                            <p>Estado</p>
                        </th>
                    </tr>
                    <tr class="tablacontenidos">
                        <th class="actividades">
                            <details>
                                <summary>
                                    <h1>Actividad-1</h1>
                                    <div class="estadoactividad">
                                        <h2 class="estado" data-estado="C">Completada</h2>
                                    </div>
                                </summary>
                                <div class="contentsumm">
                                    <h3>Detalles de la actividad</h3>
                                    <p>Taller de liderazgo</p>
                                    <h3>Enlace:</h3>
                                    <p>Únase a la reunión de Zoom <br>
                                        https://us05web.zoom.us/j/86036568817?pwd=rGPQGLR9IbQ6AcryFiZenyW8eSGps8.1
                                    </p>
                                </div>
                            </details>
                            <details>
                                <summary>
                                    <h1>Actividad-2</h1>
                                    <div class="estadoactividad">
                                        <h2 class="estado" data-estado="E">En Progreso</h2>
                                    </div>
                                </summary>
                                <div class="contentsumm">
                                    <h3>Detalles de la actividad</h3>
                                    <p>Taller de mewing</p>
                                    <h3>Enlace:</h3>
                                    <p>Únase a la reunión de Zoom <br>
                                        https://us05web.zoom.us/j/86036568817?pwd=rGPQGLR9IbQ6AcryFiZenyW8eSGps8.1
                                    </p>
                                </div>
                            </details>
                            <details>
                                <summary>
                                    <h1>Actividad-3</h1>
                                    <div class="estadoactividad">
                                        <h2 class="estado" data-estado="E">En Progreso</h2>
                                    </div>
                                </summary>
                                <div class="contentsumm">
                                    <h3>Detalles de la actividad</h3>
                                    <p>Taller de looksmaxin</p>
                                    <h3>Enlace:</h3>
                                    <p>Únase a la reunión de Zoom <br>
                                        https://us05web.zoom.us/j/86036568817?pwd=rGPQGLR9IbQ6AcryFiZenyW8eSGps8.1
                                    </p>
                                </div>
                            </details>
                            <details>
                                <summary>
                                    <h1>Activdad-4</h1>
                                    <div class="estadoactividad">
                                        <h2 class="estado" data-estado="P">Pendiente</h2>
                                    </div>
                                </summary>
                                <div class="contentsumm">
                                    <h3>Detalles de la actividad</h3>
                                    <p>Taller de cs2</p>
                                    <h3>Enlace:</h3>
                                    <p>Únase a la reunión de Zoom <br>
                                        https://us05web.zoom.us/j/86036568817?pwd=rGPQGLR9IbQ6AcryFiZenyW8eSGps8.1
                                    </p>
                                </div>
                            </details>
                        </th>
                    <tr class="columnasparticipantes">
                        <td>
                            <div class="participantestexto">
                                <i class="fa-solid fa-people-group" style="color: #000000;"></i>
                                <span>Participantes</span>
                                <h1 class="participantes" data-cantidadp="20">20</h1>
                                <i class="fa-regular fa-square-plus" style="color: #000000;"
                                    onclick="openMenuParticipantes()"></i>
                            </div>
                        </td>
                        <td>
                            <div class="botoncreara">
                                <button class="nactividad"><span class="nuevaactividad">Crear Nueva
                                        Actividad</span></button>
                                <dialog class="crear-actividad" id="crearact">
                                    <div class="container-crear-actividad">
                                        <div class="creartexto">
                                            <h2>CREAR ACTIVIDAD</h2>
                                        </div>
                                        <div class="campo">
                                            <label for="titulo">Agregar Título:</label>
                                            <input type="text" id="titulo" style="background-color: #ffffff;">
                                        </div>
                                        <div class="campo">
                                            <label for="detalles">Detalles de la Actividad:</label>
                                            <textarea id="detalles" style="background-color: #D9D9D9;"></textarea>
                                        </div>
                                        <div class="campo">
                                            <label for="enlace">Asignar Enlace:</label>
                                            <input type="text" id="enlace" style="background-color: #ffffff;">
                                        </div>
                                        <div class="campo">
                                            <label for="fecha">Asignar Fecha:</label>
                                            <input type="date" id="fecha" style="background-color: #ffffff;">
                                        </div>
                                        <div class="botonescreara">
                                            <button style="background-color: #3DB6B1;"
                                                onclick="cerrarVentana()">Cancelar</button>
                                            <button style="background-color: #92297C;">Guardar</button>
                                        </div>
                                    </div>
                                </dialog>
                                <script>
                                    function abrirVentana() {
                                        var ventanaEmergente = document.getElementById("crear-actividad");
                                        crearact.style.display = "block";
                                    }

                                    function cerrarVentana() {
                                        var ventanaEmergente = document.getElementById("crear-actividad");
                                        crearact.style.display = "none";
                                    }

                                    var botonCrearActividad = document.querySelector(".nactividad");
                                    botonCrearActividad.addEventListener("click", abrirVentana);
                                </script>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

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
    </div>
    <script>

        /*MENU PARTICIPANTES*/

        //abrir añadir participantes
        function openMenuParticipantes() {
            var dialog = document.getElementById('addp');
            dialog.show(); // En lugar de showModal()
        }

        //cerar añadir participantes
        function closeParticipantesMenu(event) {
            event.preventDefault();
            var dialog = document.getElementById('addp');
            dialog.close();
        }

        document.addEventListener('DOMContentLoaded', function () {
            const triggerIcon = document.querySelector('.fa-check-square');
            const dialog = document.querySelector('#addp');

            triggerIcon.addEventListener('click', function () {
                positionDialog(dialog, triggerIcon);
                dialog.showModal();
            });
        });

        //MOVER PARTICIPANTES
        document.addEventListener('DOMContentLoaded', function () {
            var dialog = document.getElementById('addp');
            var handle = document.querySelector('.botonespart');
            var offsetX = 0, offsetY = 0;
            var active = false;

            handle.addEventListener('mousedown', function (e) {
                active = true;
                offsetX = e.clientX - dialog.offsetLeft;
                offsetY = e.clientY - dialog.offsetTop;
            });

            document.addEventListener('mousemove', function (e) {
                if (active) {
                    dialog.style.left = e.clientX - offsetX + 'px';
                    dialog.style.top = e.clientY - offsetY + 'px';
                }
            });

            document.addEventListener('mouseup', function () {
                active = false;
            });

            dialog.addEventListener('close', function () {
                active = false;
            });
        });

        //MOVER ACTIVIDADES
        document.addEventListener('DOMContentLoaded', function () {
            var dialog = document.getElementById('crearact');
            var handle = document.querySelector('.creartexto');
            var offsetX = 0, offsetY = 0;
            var active = false;

            handle.addEventListener('mousedown', function (e) {
                active = true;
                offsetX = e.clientX - dialog.offsetLeft;
                offsetY = e.clientY - dialog.offsetTop;
            });

            document.addEventListener('mousemove', function (e) {
                if (active) {
                    dialog.style.left = e.clientX - offsetX + 'px';
                    dialog.style.top = e.clientY - offsetY + 'px';
                }
            });

            document.addEventListener('mouseup', function () {
                active = false;
            });

            dialog.addEventListener('close', function () {
                active = false;
            });
        });

        /*FILTRAR USUARIOS EN MENU PARTICIPANTES*/
        function showFilterOptions() {
            var dialog = document.getElementById('filterOptions');
            dialog.style.display = 'block';
        }

        function closeFilterOptions() {
            var dialog = document.getElementById('filterOptions');
            dialog.style.display = 'none';
        }

    </script>

</body>

</html>
