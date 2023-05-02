document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('formulario-articulo');
    formulario.addEventListener('submit', publicarNoticia);
});



function publicarNoticia(evento) {
    evento.preventDefault(); // Evitar que se recargue la página al enviar el formulario

    // Obtener los valores del formulario
    const titulo = document.getElementById('titulo').value;

    const contenido = document.getElementById('contenido').value;
    const imagenInput = document.getElementById('imagenInput');

    /*const fechaActual = new Date();

    const fecha = fechaActual.toLocaleString();*/

    const fechaActual = new Date();
    const opcionesFecha = { year: 'numeric', month: 'long', day: 'numeric' };
    const fecha = fechaActual.toLocaleDateString(undefined, opcionesFecha);





    // Crear un elemento article para la noticia
    const noticia = document.createElement('div');
    noticia.classList.add('col-md-5');
    noticia.classList.add('noticia');


    // Crear un nuevo elemento div dentro del div noticia
    const nuevoDiv = document.createElement('div');
    nuevoDiv.classList.add('card');
    nuevoDiv.classList.add('card-medium');


    const imagenNoticia = document.createElement('img');
    const imagen = imagenInput.files[0];
    const imagenUrl = URL.createObjectURL(imagen);
    imagenNoticia.src = imagenUrl;
    imagenNoticia.classList.add('card-img-top');
    nuevoDiv.appendChild(imagenNoticia);


    const nuevoDivBody = document.createElement('div');
    nuevoDivBody.classList.add('card-body');
    nuevoDivBody.classList.add('bg-warning');


    const tituloNoticia = document.createElement('h5');
    tituloNoticia.textContent = titulo;
    tituloNoticia.classList.add('card-title')

    nuevoDivBody.appendChild(tituloNoticia);

    const contenidoNoticia = document.createElement('p');
    contenidoNoticia.textContent = contenido;
    contenidoNoticia.classList.add('card-text')

    nuevoDivBody.appendChild(contenidoNoticia);

    const fechaNoticia = document.createElement('p');
    fechaNoticia.textContent = fecha;
    fechaNoticia.classList.add('card-text')


    nuevoDivBody.appendChild(fechaNoticia);

    const enlace = document.createElement('a');
    enlace.textContent = 'ir a la noticia';
    enlace.classList.add('btn');
    enlace.classList.add('btn-primary');
    nuevoDivBody.appendChild(enlace);

    nuevoDiv.appendChild(nuevoDivBody);


    noticia.appendChild(nuevoDiv);




    // Agregar la noticia al elemento "noticias"
    const contenedorNoticias = document.getElementById('nuevas');
    contenedorNoticias.appendChild(noticia);



    // Limpiar el formulario después de publicar la noticia
    document.getElementById('titulo').value = '';
    document.getElementById('contenido').value = '';
    document.getElementById('autor').value = '';
}