<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtualVision</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <style>
         .carousel-item img {
        width: 100%; /* Ajusta el ancho a 100% del contenedor */
        height: 600px; /* Establece la altura fija deseada */
        object-fit: cover;
        /* Ajusta la imagen a la altura */
        }
        /* Cambiar el color de los íconos de Previous y Next a negro */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            /* Cambiar el color a negro (código hexadecimal) */
        }

        /* Cambiar el color de los íconos de Previous y Next a negro */
        .carousel-control-prev-icon::before,
        .carousel-control-next-icon::before {
            color: #000;
            /* Cambiar el color a negro (código hexadecimal) */
        }
    </style>

</head>

<?php include 'Vistes/navbar.php'; ?>

<body>
    <!-- CARROUSSEL -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block mx-auto img-fluid h-20" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block mx-auto img-fluid h-20" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block mx-auto img-fluid h-20" alt="Imagen 3">
            </div>
            <!-- Agrega más elementos .carousel-item para más imágenes -->
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

    <div class="text-center p-4 bg-secondary">
    <div class="d-flex flex-column align-items-center">
        <p class="display-4">Texto en el centro</p>
        <a href="Vistes/choose.php" class="btn btn-primary btn-lg">Prueba gratis</a>
    </div>
</div>








    <?php include 'Vistes/footer.php'; ?>

</body>

</html>