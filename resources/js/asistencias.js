// Datos de alumnos de prueba
const alumnos = [
    { nombre: "Josefina Alexandra Sanchez Torres", estado: "Asistencia" },
    { nombre: "Luis David Mostacero Cieza", estado: "Tardanza" },
    { nombre: "Hugo Elias Márquez Diestra", estado: "Inasistencia" },
    { nombre: "Bryan Arturo Marin Yupanqui", estado: "Inasistencia" },
    { nombre: "Fabricio Alexander Ulco Lazo", estado: "Inasistencia" },
    { nombre: "Zahir Aredo Vejarano", estado: "Inasistencia" },
    { nombre: "Adrián Nicolás Cisneros Bartra", estado: "Inasistencia" },
    { nombre: "Ernesto Saniel Castro Lozano", estado: "Inasistencia" }
];

document.addEventListener('DOMContentLoaded', function () {
    const listaUsuarios = document.querySelector('.lista-usuarios');
    cargarAlumnos(listaUsuarios, alumnos); // Cargar alumnos inicialmente

    const links = document.querySelectorAll('.area a');
    const nombreActividad = document.getElementById('nombre-actividad');

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const actividad = this.getAttribute('data-actividad');
            nombreActividad.textContent = actividad;
            cargarAlumnos(listaUsuarios, alumnos); // Reutilizar función para cambiar actividad
        });
    });
});

function cargarAlumnos(listaUsuarios, alumnos) {
    console.log("Cargando alumnos...");  // Esto debería aparecer en la consola
    listaUsuarios.innerHTML = ''; // Limpiar lista existente
    alumnos.forEach(alumno => {
        const alumnoDiv = document.createElement('div');
        alumnoDiv.innerHTML = `
            <span>${alumno.nombre}</span>
            <select>
                <option value="Asistencia" ${alumno.estado === "Asistencia" ? 'selected' : ''}>Asistencia</option>
                <option value="Tardanza" ${alumno.estado === "Tardanza" ? 'selected' : ''}>Tardanza</option>
                <option value="Inasistencia" ${alumno.estado === "Inasistencia" ? 'selected' : ''}>Inasistencia</option>
            </select>
        `;
        listaUsuarios.appendChild(alumnoDiv);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const listaUsuarios = document.querySelector('.lista-usuarios');
    cargarAlumnos(listaUsuarios, alumnos);  // Asegúrate de que esto se llama
});
