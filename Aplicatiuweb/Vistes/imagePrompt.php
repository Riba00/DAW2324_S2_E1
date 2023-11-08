<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .carousel-item img {
            width: 100%;
            /* Ajusta el ancho a 100% del contenedor */
            height: 600px;
            /* Establece la altura fija deseada */
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
<?php include 'navbar.php'; ?>
<body>
   

    <div class="container">

        <div class="input-group my-3">
            <input required type="text" class="form-control" placeholder="Enter a topic for the image"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <a href="imageChoose.php" class="btn btn-success" type="button" id="button-addon2">Button</a>
        </div>

        <hr>

        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="/Vistes/imageChoose.php">
                        <img src="../img/valentinesDay.jpg" class="d-block mx-auto img-fluid h-20" alt="Imagen 1">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/Vistes/imageChoose.php">
                        <img src="../img/halloween.png" class="d-block mx-auto img-fluid h-20" alt="Imagen 2">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="/Vistes/imageChoose.php">
                        <img src="../img/mothersDay.jpg" class="d-block mx-auto img-fluid h-20" alt="Imagen 3">
                    </a>
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


    </div>
</body>
<?php include 'footer.php'; ?>

</html>