<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Web El Faro - Negocios</title>
</head>

<body>

    <!--Navbar Principal-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase fs-1" href="#">El Faro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-principal" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbar-principal">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./deportes.php">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./negocios.php">Negocios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./crearCuenta.php">Crear Cuenta</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./login.php">Ingresar</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="card card-hora me-3" style="width: min-content;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <p id="fecha"></p>
                                <p id="hora"></p>
                            </h5>
                        </div>
                    </div>
                    <div class="card card-hora" style="width: min-content;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <p>Articulos:</p>
                                <p id="contador"></p>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!--Anuncios-->
    <section class="anuncios" style="background-color: yellow;">
        <div class="container">
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-anuncios">
                        <img src="./Imagenes/anuncio1.jpg" class="card-img-top" alt="Anuncio 1">
                        <div class="card-body">
                            <h5 class="card-title">Anuncio 1</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-anuncios">
                        <img src="./Imagenes/anuncio2.jpg" class="card-img-top" alt="Anuncio 2">
                        <div class="card-body">
                            <h5 class="card-title">Anuncio 2</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-anuncios">
                        <img src="./Imagenes/anuncio3.jpg" class="card-img-top" alt="Anuncio 3">
                        <div class="card-body">
                            <h5 class="card-title">Anuncio 3</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="card card-anuncios">
                        <img src="./Imagenes/anuncio4.jpg" class="card-img-top" alt="Anuncio 4">
                        <div class="card-body">
                            <h5 class="card-title">Anuncio 4</h5>
                            <a href="#" class="btn btn-primary">Más información</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!--Navbar Secundario-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container-fluid d-flex justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="https://www.accuweather.com/es/cl/chile-weather" class="nav-link">Clima</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.horoscopo.com/" class="nav-link">Horóscopo</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://si3.bcentral.cl/Indicadoressiete/secure/Indicadoresdiarios.aspx"
                            class="nav-link">Indicadores económicos</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.latercera.com/" class="nav-link">Diario La Tercera</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.bbc.com/" class="nav-link">BBC</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!--Contenedor de noticias-->
    <div class="container">


        <div class="row"><!--Contenedor de noticias en horizontal-->


            <div class="col-md-8 card-destacado" id="destacado"><!--Destacada-->
                <header class="display-4  text-white">Noticias destacadas</header>

            </div>



            <div class="row" id="nuevas">

            </div>



            <div class="row" id="normal">

                <div class="col-md-4 noticia">
                    <div class="card">
                        <img src="./imagenes/greenglass.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Los mejores vasos del mundo que contribuyen con el Medioambiente</h5>
                            <p class="card-text">Este miércoles 25 de agosto se realizó una entretenida charla junto a
                                Óscar Muñoz, fundador
                                de la marca Green Glass, que se dedica a la creación de vasos elaborados de botellas de
                                vidrio
                                reciclado y que se ha convertido en un éxito comercial durante los últimos años. El
                                empresario
                                y también fundador de Haciendola.com, conversó con los estudiantes de los Liceos
                                Técnicos de
                                las regiones del Biobío y La Araucanía acerca de su experiencia personal y las
                                motivaciones
                                a la hora de emprender un negocio junto con los riesgos y beneficios de los proyectos
                                que
                                permiten cumplir los sueños por más difíciles que sean lograrlos.</p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia"><!--Grupo de 3 tarjetas-->
                    <div class="card">
                        <img src="./imagenes/sercotec.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sercotec anuncia su calendario de convocatorias 2023</h5>
                            <p class="card-text">El servicio informó las fechas relevantes para postular a sus fondos
                                concursables para pymes
                                y emprendimientos. El calendario parte en marzo con la convocatoria a gremios de pymes.
                                Santiago, febrero 2023.- El Servicio de Cooperación Técnica, Sercotec, anunció el
                                calendario
                                de convocatorias 2023 para sus fondos concursables dirigidos a pymes y emprendimientos,
                                buscando facilitar la preparación de quienes estén pensando en postular a las diversas
                                líneas
                                de apoyo que ofrece la entidad.
                            </p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia"><!--Grupo de 3 tarjetas-->
                    <div class="card">
                        <img src="./imagenes/chatgpt.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ChatGPT: Italia se convierte en el primer país occidental en bloquear
                                el acceso al
                                programa de inteligencia artificial</h5>
                            <p class="card-text">El organismo gubernamental para la protección de datos italiano anunció
                                que existen
                                preocupaciones de privacidad relacionadas con el chatbot creado por la empresa
                                estadounidense
                                OpenAI y que cuenta con el respaldo de Microsoft.Las autoridades italianas informaron
                                que la
                                prohibición e investigación del asunto tienen "efecto inmediato".
                            </p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia">
                    <div class="card">
                        <img src="./imagenes/Red-Hot-Chili-Peppers-Unlimited-Love.jpg" class="card-img-top" alt="...">
                        <audio controls>
                            <source src="./audio/Black Summer (Unlimited Love Album).mp3" type="audio/mpeg">
                        </audio>
                        <div class="card-body">
                            <h5 class="card-title">Black Summer, Primer sencillo de su álbum Unlimited Love.</h5>

                        </div>
                    </div>
                </div>


            </div>



        </div>



    </div>

    <!--Titulo Seccion Crear Noticias-->
    <header class="text-center bg-dark text-white mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>CREAR NOTICIA</h1>
                </div>
            </div>
        </div>
    </header>

    <!--Formulario-->
    <form class="mt-5" id="formulario-articulo">
        <div class="form-group">
            <label for="titulo" class="ms-4">Título de la noticia</label>
            <input type="text" class="form-control" id="titulo" required>
            <div class="invalid-feedback">Por favor ingrese un título para la noticia.</div>
        </div>
        <div class="form-group">
            <label for="contenido" class="ms-4">Contenido</label>
            <textarea class="form-control" id="contenido" rows="5" required></textarea>
            <div class="invalid-feedback">Por favor ingrese el contenido de la noticia.</div>
        </div>
        <br>
        <div class="form-group">
            <label for="imagen" class="text-dark ms-4 ">Imagen</label>
            <input type="file" class="form-control-file" id="imagenInput">
            <small class="form-text  text-dark m-5">Seleccione una imagen (opcional).</small>
        </div>
        <button type="submit" class="btn btn-primary m-5">Crear noticia</button>

    </form>

    <!--Footer-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h4>Sobre nosotros</h4>
                    <p>Somos un diario comprometido con la información y la verdad.</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4>Síguenos</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h4>Contacto</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Teléfono: 555-1234</a></li>
                        <li><a href="#">Correo electrónico: info@diario.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <script src="./js/fecha-hora.js"></script>
    <script src="./js/otranoticia.js"></script>
    <script src="./js/noticias.js"></script>
    <script src="./js/contador.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>


</body>

</html>