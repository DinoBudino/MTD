var modal = document.getElementById('addp');
var isDragging = false;
var offset = { x: 0, y: 0 };

modal.addEventListener('mousedown', function (event) {
    isDragging = true;
    // Guarda la posición del mouse en relación con la esquina superior izquierda del modal
    offset.x = event.clientX - modal.getBoundingClientRect().left;
    offset.y = event.clientY - modal.getBoundingClientRect().top;
});

document.addEventListener('mousemove', function (event) {
    if (!isDragging) return;

    // Calcula la nueva posición del modal
    var newX = event.clientX - offset.x;
    var newY = event.clientY - offset.y;

    // Verifica que el modal no se salga de los límites de la pantalla
    var maxX = window.innerWidth - modal.offsetWidth;
    var maxY = window.innerHeight - modal.offsetHeight;

    newX = Math.max(0, Math.min(newX, maxX));
    newY = Math.max(0, Math.min(newY, maxY));

    // Aplica la nueva posición al modal
    modal.style.left = newX + 'px';
    modal.style.top = newY + 'px';
});

document.addEventListener('mouseup', function () {
    isDragging = false;
});
