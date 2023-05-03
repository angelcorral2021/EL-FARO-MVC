<?php


$variable = "hola con PHP";


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Web El Faro</title>
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
                    <button onclick="window.location.href='./crearNoticia.php'" class="btn btn-primary mt-5 ms-5">Crear Noticia</button>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="https://si3.bcentral.cl/Indicadoressiete/secure/Indicadoresdiarios.aspx" class="nav-link">Indicadores económicos</a>
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
                        <img src="./Imagenes/rusia.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LA VISITA DE XI JINPING A RUSIA EN EL CONTEXTO DE LA GUERRA DE
                                UCRANIA</h5>
                            <p class="card-text">
                                Esta estrategia de cambiar el orden y la hegemonía mundial, ha sido promovida por Putin
                                desde su regreso
                                al Kremlin el 2012 y por Xi Jinping, quien asumió la Secretaría General del Partido
                                Comunista de China
                                en ese mismo año. Esta estrategia compartida parte de la base que EE.UU. y sus socios
                                europeos se
                                encuentra en la cima de su influencia y han entrado en un proceso de declive
                                irreversible. En este
                                sentido, ambos liderazgos están convencidos de la inevitable “desaparición” de EE.UU. de
                                la escena
                                internacional como actor primario y, por los mismo, piensa que es su turno para asumir
                                esa posición como
                                buenos actores de aspiración imperial.</p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 noticia"><!--Grupo de 3 tarjetas-->
                    <div class="card">
                        <img src="./Imagenes/gripe.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CONFIRMAN PRIMER CASO DE HUMANO DE GRIPE AVIAR EN CHILE</h5>
                            <p class="card-text">El Ministerio de Salud de Chile informó este miércoles el primer caso
                                humano de gripe aviar en
                                el país. Se trata de una mujer de 43 años que se contagió después de haber estado en
                                contacto
                                con aves de corral en una feria de la región de Valparaíso. La paciente fue
                                hospitalizada y su
                                condición es estable.

                                La gripe aviar es una enfermedad causada por el virus H5N1, que normalmente afecta a
                                aves y
                                puede contagiarse a humanos. Aunque el virus es altamente patógeno, el riesgo de
                                transmisión de
                                persona a persona es bajo. Las autoridades de salud han implementado medidas para
                                controlar el
                                brote y prevenir la propagación del virus.
                            </p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia"><!--Grupo de 3 tarjetas-->
                    <div class="card">
                        <img src="./Imagenes/red-hot-chili-peppers-2022-promo-03-web-768x432.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">RED HOT CHILI PEPPERS AGOTA ENTRADAS EN CHILE</h5>
                            <p class="card-text">La banda de rock Red Hot Chili Peppers ha anunciado su gira mundial
                                para el año 2023, la cual incluirá
                                una parada en Chile. Los fanáticos de la banda de nuestro país podrán disfrutar del
                                concierto en el
                                Movistar Arena, el cual se llevará a cabo a finales de Noviembre de este año.
                                Esta será la segunda vez que la banda estadounidense se presente en Chile en solitario,
                                luego de su
                                exitosa visita en el año 2014. La gira promocionará sus dos recientes álbumes lanzados
                                en 2022
                                <b>"Unlimited Love"</b> y <b>"Return of the Dream Canteen"</b>, así como la vuelta de
                                John Frusciante
                                luego de 14 años.
                            </p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia">
                    <div class="card">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vmwY8zUmw18" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Los mejores vasos del mundo que contribuyen con el
                                Medioambiente</h5>
                            <p class="card-text">Green Glass es una compañía que está revolucionando la industria de los
                                vasos al producir vasos de alta calidad que no solo son duraderos y elegantes, sino que
                                también son amigables con el medio ambiente.

                                Los vasos de Green Glass están hechos de vidrio reciclado, lo que significa que no se
                                requiere la extracción de nuevos recursos para su producción. Además, el vidrio es un
                                material que se puede reciclar infinitamente, lo que reduce la cantidad de desechos que
                                se generan en el proceso de fabricación de vasos nuevos.

                                Los vasos de Green Glass están disponibles en una amplia variedad de diseños y tamaños,
                                desde vasos para agua hasta vasos para vino y cócteles. Todos están hechos a mano por
                                artesanos altamente capacitados para garantizar la mejor calidad.

                            </p>
                            <a href="#" class="btn btn-primary">Ir a la noticia</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 noticia">
                    <div class="card">
                        <img src="./Imagenes/Red-Hot-Chili-Peppers-Unlimited-Love.jpg" class="card-img-top" alt="...">
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>