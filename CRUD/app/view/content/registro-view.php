<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Planeta Mascota</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=".\app\view\css\estilos.css">
    <script defer src=".\app\view\js\vali.js"></script>
</head>
    
    <body>
        <div class="d-flex flex-column min-vh-100">
            <!-- header -->
            <header class="header py-3 bg-primary text-white text-center">
                <h3 class="titulo">Planeta Mascota</h3>
                <div>
                    <img src="/img/cat.png" class="img_header" alt="Dispen">
                </div>
            </header>
            
            <!-- nav -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/estructura/registro.html">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/estructura/iniciose.html">Inicio Sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/estructura/recuperarContrasena.html">Recuperación de Contraseña</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
            <main class="container mt-5 flex-fill">
            
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center">Registro</h3>
                                <form novalidate id="registroForm">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Usuario</label>
                                            <input type="text" class="form-control" id="username" placeholder="Ingrese su usuario" name="usuario" title="solo minusculas" pattern="[a-z]{1,15}" required>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo acepta minúsculas.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" pattern="[a-z]{1,15}" title="solo acepta minúsculas" required>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo acepta minúsculas.</div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="lastname">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Ingrese su apellido paterno" pattern="[a-z]{1,15}" required>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo acepta minúsculas.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lastname2">Apellido Materno</label>
                                            <input type="text" class="form-control" id="lastname2" placeholder="Ingrese su apellido materno" pattern="[a-z]{1,15}" required>
                                            <div class="invalid-feedback">Este campo es obligatorio y solo acepta minúsculas.</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Teléfono</label>
                                        <input type="text" class="form-control" id="tel" placeholder="Ingrese su número de teléfono" pattern="[0-9]{10}" required>
                                        <div class="invalid-feedback">Este campo es obligatorio y debe contener 10 dígitos.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" required minlength="8" title="Debe contener al menos 8 caracteres, incluyendo al menos una mayúscula, una minúscula, un número y un carácter especial" placeholder="Ingrese su correo electrónico ">
                                        <div class="invalid-feedback">Ingrese un correo electrónico válido.</div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="password">Contraseña</label>
                                            <input type="password" placeholder="Ingrese su contraseña" class="form-control" id="password" minlength="8" maxlength="15" title="Mínimo 8 caracteres, al menos una letra y un número" required>
                                            <div class="invalid-feedback">Este campo es obligatorio.</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password2">Repetir Contraseña</label>
                                            <input type="password" class="form-control" id="password2" placeholder="Repita su contraseña" required>
                                            <div class="invalid-feedback">Las contraseñas no coinciden.</div>
                                        </div>
                                    </div>
                                    <button type="submit" id="btn-enviar" class="btn btn-primary btn-block">Registrarse</button>
                                    <br>
                                    <button type="button" class="btn btn-danger btn-block ms-2 flex-grow-1  justify-content-center ">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- footer -->
            <footer class="footer mt-auto py-3 bg-dark text-white text-center">
                <div class="container">
                    <p>© 2024 Planeta Mascota. Todos los derechos reservados.</p>
                    <div class="buttons">
                     <i class="bi bi-twitter"></i>   
    
                        <a href="">T</a>
                        <a href="#">I</a>
                        <a href="#">Y</a>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>