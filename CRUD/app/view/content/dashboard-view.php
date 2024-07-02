<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica página - Planeta Mascota</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
    <link rel="stylesheet" href="app\view\css\estilo.css">
    <link rel="stylesheet" href="app\view\css\estiloinicio.css">
</head>
<body>
    <!-- header -->
    <div><header>
            <h5 class="titulo">Planeta Mascota</h5>
        </header>

        <!-- Start Hero Carousel -->
        <section class="hero is-medium has-carousel">
            <div id="carousel-demo" class="hero-carousel">
                <div class="item-1">
                    <figure class="image is-4by3">
                        <img  class="carousel-image"   src="<?php echo APP_URL ; ?>app/view/img/cat.png" alt="Bulma" class="carousel-image">
                    </figure>
                </div>
                <div class="item-2">
                    <figure class="image is-4by3">
                        <img  class="carousel-image " src="<?php echo APP_URL ; ?>app/view/img/cat.png" alt="Bulma" class="carousel-image">
                    </figure>
                </div>
                <div class="item-3">
                    <figure class="image is-4by3">
                        <img class="carousel-image"  src="<?php echo APP_URL ; ?>app/view/img/1pet.jpeg" alt="Bulma" class="carousel-image">
                    </figure>
                </div>
            </div>
            <div class="hero-head"></div>
            <div class="hero-body"></div>
            <div class="hero-foot"></div>
        </section>
        <!-- End Hero Carousel -->

        <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
        <script src="<?php echo APP_URL; ?>app\view\js\carusel.js"></script> 
        <script>
            bulmaCarousel.attach('#carousel-demo', {
                slidesToScroll: 1,
                slidesToShow: 1
            });
        </script>
        <style>
/* app/view/css/estilo.css */

/* Define a class for the carousel images */
.carousel-image {
    max-width: 600px;  /* Ajusta el ancho máximo según sea necesario */
    max-height: 300px; /* Ajusta la altura máxima según sea necesario */
    margin: 0 auto;    /* Centra las imágenes horizontalmente */
}

      body {
    color: rgb(168, 112, 39);
    background: url(app/view/img/animal.png) center/cover no-repeat fixed;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: rgb(130, 130, 73);
    background-color: antiquewhite;
}
</style>

        <footer class="footer mt-auto py-3 bg-dark text-white text-center">
            <div class="container">
                <p>© 2024 Planeta Mascota. Todos los derechos reservados.</p>
                <div class="buttons">
                    <i class="bi bi-twitter"></i>
                    <a href="#"> TWITTER</a>
                    <a href="#">INSTAGRAM</a>
                    <a href="#">FACEBOOK</a>
                    <a href="#">WHATSAPP</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
