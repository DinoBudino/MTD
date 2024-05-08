document.getElementById('fileInput').addEventListener('change', function() {
    const files = this.files;
    const materialDiv = document.querySelector('.material');
    materialDiv.innerHTML = ''; // Limpia el contenido anterior

    Array.from(files).forEach(file => {
        const fileDiv = document.createElement('div');
        fileDiv.className = 'file-preview'; // Clase para el estilo
        const fileName = document.createElement('p');
        fileName.textContent = file.name;
        fileDiv.appendChild(fileName);

        if (file.type.startsWith('image/')) {
            const img = document.createElement('img');
            const reader = new FileReader();
            reader.onload = function(e) {
                img.src = e.target.result;
                fileDiv.appendChild(img);
            };
            reader.readAsDataURL(file);
        } else if (file.type.startsWith('video/')) {
            const video = document.createElement('video');
            video.setAttribute('controls', '');
            video.style.maxWidth = '100%';
            video.style.maxHeight = '120px';
            const reader = new FileReader();
            reader.onload = function(e) {
                video.src = e.target.result;
                fileDiv.appendChild(video);
            };
            reader.readAsDataURL(file);
        } else {
            const icon = document.createElement('i');
            icon.style.fontSize = '48px'; // Tamaño del ícono

            switch (file.type) {
                case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                    icon.className = 'fas fa-file-word';
                    icon.style.color = 'blue'; // Color del ícono Word
                    break;
                case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
                    icon.className = 'fas fa-file-powerpoint';
                    icon.style.color = 'red'; // Color del ícono PowerPoint
                    break;
                case 'application/vnd.ms-powerpoint':
                    icon.className = 'fas fa-file-powerpoint';
                    icon.style.color = 'orange'; // Color para ícono de PowerPoint antiguo
                    break;
                case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
                    icon.className = 'fas fa-file-excel';
                    icon.style.color = 'green'; // Color del ícono Excel
                    break;
                case 'application/pdf':
                    icon.className = 'fas fa-file-pdf';
                    icon.style.color = 'darkred'; // Color del ícono PDF
                    break;
                case 'video/mp4':
                    icon.className = 'fas fa-file-video';
                    icon.style.color = 'black'; // Color del ícono MP4
                    break;
                case 'text/plain':
                    icon.className = 'fas fa-file-alt';
                    icon.style.color = 'grey'; // Color para ícono de archivo de texto
                    break;
                default:
                    icon.className = 'fas fa-file';
                    icon.style.color = 'lightgrey'; // Color por defecto para otros tipos de archivo
                    break;
            }

            fileDiv.appendChild(icon);
        }

        materialDiv.appendChild(fileDiv);
    });
});
