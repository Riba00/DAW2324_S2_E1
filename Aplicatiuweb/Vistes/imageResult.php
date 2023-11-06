<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <!--  NAVBAR  -->
    <?php include '../navbar.php'; ?>

    <!--  MAIN  -->
    <section class="text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Image Result</h1>

                <div class="card shadow-sm">
                    <img src="../img/img1.jpg" class="img-thumbnail" alt="...">
                </div>

                <p>
                    <a href="/Vistes/imagePrompt.php" class="btn btn-secondary mx-3 my-2">Reset Process</a>
                    <a href="#" class="btn btn-primary my-2">Next Step</a>
                </p>
            </div>
        </div>
    </section>

    <div class="py-3 bg-body-tertiary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter a topic for the image"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <a href="imageChoose.php" class="btn btn-success" type="button"
                                    id="button-addon2">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  FOOTER  -->
    <?php include '../footer.php'; ?>
</body>




</html>