<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script defer src="./javascrip/vali.js"></script>
</head>
<body>

    <div class="container w-50 mt-5 rounded shadow bg-white p-5">
        <div class="row align-items-stretch">
            <div class="col">
                <div class="text-center mb-4">
                    <i class="fas fa-key fa-3x text-primary"></i>
                </div>
                <p class="h1 text-center">RECUPERAR CONTRASEÑA</p>
                <h2 class="fw-bold text-center py-3">Bienvenidos</h2>
                
                <form action="#">
                    <div class="mb-4">
                        <label for="email" class="form-label">CORREO ELECTRÓNICO</label>
                        <input type="email" class="form-control" minlength="8" name="email" placeholder="Ingrese su correo" title="Debe contener al menos 8 caracteres, incluyendo al menos una mayúscula, una minúscula, un número y un carácter especial" required>
                        <div class="invalid-feedback">Ingrese un correo electrónico válido.</div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">CONTRASEÑA NUEVA</label>
                        <input type="password" class="form-control" name="password" minlength="8" title="al menos ocho caracteres, una mayúscula y un número"    placeholder="Ingrese nueva contraseña " required>
                        <div class="invalid-feedback">Ingrese una contraseña válida.</div>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary w-100">Aceptar</button>
                    </div>
                    <div class="mb-4">
                        <button type="button" class="btn btn-danger w-100">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
