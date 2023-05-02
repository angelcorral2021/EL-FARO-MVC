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

    <!--Navbar Principal Sin articulos-->
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
                </div>
            </div>
        </div>
    </nav>



    <div class="container login">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h4 class="mb-0">CREAR NOTICIA</h4>
                    </div>
                    <div class="card-body">


                        
                        <form class="mt-5" id="formulario-articulo" name="formulario" action="Controllers/crear_noticia.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="titulo" class="ms-4">Título de la noticia</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                                <div class="invalid-feedback">Por favor ingrese un título para la noticia.</div>
                            </div>
                            <div class="form-group">
                                <label for="contenido" class="ms-4">Contenido</label>
                                <textarea class="form-control" id="contenido" rows="5" name="contenido" required></textarea>
                                <div class="invalid-feedback">Por favor ingrese el contenido de la noticia.</div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="imagen" class="text-dark ms-4 ">Imagen</label>
                                <input type="file" class="form-control-file" id="imagenInput" name="imagen">
                                <small class="form-text  text-dark m-5">Seleccione una imagen (opcional).</small>
                            </div>
                            <button type="submit" class="btn btn-primary m-5">Crear noticia</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Footer-->
    <footer class="fixed-bottom">
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
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>