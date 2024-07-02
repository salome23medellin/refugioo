<nav class="navbar is-primary">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo APP_URL; ?>dashboard/">
 <figure class=" is-cat">
 <img class="is-rounded  navbar-image"  src="<?php echo APP_URL ; ?>app/view/img/cat.png" alt="Bulma"  />
 </figure>
        </a>
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <style>
         .image is-cat {
      max-width: 400px;  /* Adjust the maximum width as needed */
    max-height: 300px; /* Adjust the maximum height as needed */
    margin: 0 auto;    /* Center the images horizontally */
      }
        .navbar-image {
            max-width: 100px;  /* Ajusta el tamaño máximo del ancho */
            max-height: 100px; /* Ajusta el tamaño máximo de la altura */
        }
   
    </style>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="<?php echo APP_URL; ?>login/">
                Inicio Sesión
            </a>
            <a class="navbar-item" href="<?php echo APP_URL; ?>dashboard/">
                Dashboard
            </a>
            <a class="navbar-item" href="<?php echo APP_URL; ?>quienessomos/">
                Quiénes Somos
            </a>
            <a class="navbar-item" href="<?php echo APP_URL; ?>contactos/">
                Contactos
            </a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    Usuarios
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="<?php echo APP_URL; ?>registro/">
                        Registro
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>cuenta/">
                        Cuenta
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>recuperacioncontrasena/">
                        Recuperación Contraseña
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL; ?>userSearch/">
                        Buscar
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Mi Cuenta
                </a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="<?php echo APP_URL."userUpdate/"?>">
                        Mi cuenta
                    </a>
                    <a class="navbar-item" href="<?php echo APP_URL."userPhoto/" ?>">
                        Mi foto
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?php echo APP_URL."logOut/"; ?>" id="btn_exit">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
