<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .zoom {
            background-color: green;
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(1.05);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>

</head>
<?php include 'navbar.php'; ?>

<body>
    

    <section class="text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Prompt Result</h1>
                <p class="lead text-body-secondary">Choose an image</p>
                <!-- <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p> -->
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="/Vistes/imageResult.php">
                            <img src="../img/img1.jpg" class="img-thumbnail zoom" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="/Vistes/imageResult.php">
                            <img src="../img/img1.jpg" class="img-thumbnail zoom" alt="...">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="/Vistes/imageResult.php">
                            <img src="../img/img1.jpg" class="img-thumbnail zoom" alt="...">
                        </a>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

        </div>
    </div>






    <?php include 'footer.php'; ?>
</body>




</html>