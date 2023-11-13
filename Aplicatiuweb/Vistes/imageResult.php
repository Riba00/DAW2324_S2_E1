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
        <div class="row pt-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Image Result</h1>

                <div class="card shadow-sm">
                    <img src="../img/img1.jpg" class="img-thumbnail" alt="...">
                </div>

                <p class="mt-2">
                    <a href="/Vistes/imagePrompt.php" class="btn btn-secondary mx-3">Reset Process</a>
                    <a href="#" class="btn btn-primary">Save</a>
                </p>
            </div>
        </div>
    </section>

    <div class="py-2 bg-body-tertiary">
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
                            <form method="post" action="imageChoose.php"
                                class="row row-cols-lg-auto g-3 align-items-center">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="promptText"
                                        placeholder="Enter the topic here">
                                    <button disabled id="promptButton" type="submit"
                                        class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  FOOTER  -->
    <?php include '../footer.php'; ?>

    <script>
        const promptText = document.getElementById('promptText');
        const submitButton = document.getElementById('promptButton');

        promptText.addEventListener('input', () => {
            event.preventDefault();
            if (promptText.value.length > 3) {
                submitButton.removeAttribute('disabled');
            } else {
                submitButton.setAttribute('disabled', true);
            }
        });

    </script>
</body>

</html>