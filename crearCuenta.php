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
    <!--Formulario Crear Cuenta-->
    <div class="container cuenta">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="Controllers/formulario_registro_usuario.php" method="POST">
                    <div class="form-group mt-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nombre">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group mt-2">
                        <label for="confirm_password">Repetir contraseña:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-5">Crear cuenta</button>
                    <button onclick="window.location.href='./index.php'" class="btn btn-danger mt-5 ms-5">Cancelar</button>


                </form>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer class="footer-cuenta">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>