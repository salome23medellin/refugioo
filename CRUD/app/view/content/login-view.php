<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href=".\app\view\css\estilo.css">
    <link rel="stylesheet" href=".\app\view\css\estiloinicio.css">
    <style>
        .bg {
            background-image: url(/img/1pet.jpeg);
            background-position: center center;
        }
    </style>
</head>
<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
            <div class="col bg-white p-5 rounded-end">
                <p class="h5">LOGIN</p>
                <h2 class="fw-bold text-center py-5">Bienvenidos</h2>
                
                <form action="#">
                    <div class="mb-4">
                        <label for="email" class="form-label">CORREO ELECTRONICO</label>
                        <input type="email" class="form-control" minlength="8" name="email" placeholder="Ingrese su correo" title="Debe contener al menos 8 caracteres, incluyendo al menos una mayúscula, una minúscula, un número y un carácter especial">
                        <div class="invalid-feedback">Ingrese un correo electrónico válido.</div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">CONTRASEÑA</label>
                        <input type="password" class="form-control" name="password" minlength="8"  title="al menos ocho caracteres, una mayúscula y un número" placeholder="Ingrese su contraseña">
                        <div class="invalid-feedback">Ingrese una contraseña válida.</div>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="connected">
                        <label for="connected" class="form-check-label">Mantenerme conectado</label>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                    </div>
                    <div class="mb-4">
                        <button type="button" class="btn btn-danger w-100">Cancelar</button>
                    </div>

                    <div class="my-3">
                        <span>¿No tienes una cuenta? <a href="/estructura/registro.html">Regístrate</a></span>
                        <br>
                        <span><a href="/estructura/recuperarContrasena.html">Recuperar contraseña</a></span>
                    </div>
                </form>

                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar sesión</div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <img src="app/view/img/dispen.jpg" width="32" alt="">
                                    </div>
                                    <div class="col-12 text-center">
                                        FACEBOOK     
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="/img/cromo.png" width="32" alt="">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        GOOGLE
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
