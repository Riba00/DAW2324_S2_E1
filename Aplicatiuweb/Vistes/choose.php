<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php include '../navbar.php'; ?>

    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 70vh;">
        <div class="text-center mb-4">
            <p class="display-4">Per on començem?</p>
        </div>
        <div class="d-flex gap-2">
            <a href="tu-enlace-imagen" class="btn btn-outline-secondary d-flex align-items-center btn-lg p-4">
                <div class="text-center w-100">
                    <span class="mx-auto">Imatge</span>
                </div>
                <svg class="bi ms-1" width="30" height="30">
                    <use xlink:href="#arrow-right-short"></use>
                </svg>
            </a>
            <a href="tu-enlace-producte" class="btn btn-outline-secondary d-flex align-items-center btn-lg p-4">
                <div class="text-center w-100">
                    <span class="mx-auto">Producte</span>
                </div>
                <svg class="bi ms-1" width="30" height="30">
                    <use xlink:href="#arrow-right-short"></use>
                </svg>
            </a>
        </div>
    </div>






    <?php include '../footer.php'; ?>
</body>




</html>