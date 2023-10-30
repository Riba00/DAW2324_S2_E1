<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white " href="#"><b>VirtualVision</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Generar Imagen</a>
                    </li>
                    <li class="nav-item" id="registre-li">
                        <a class="nav-link text-white position-absolute end-0 me-5" href="registre.php">Registro</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua3HL5e0NnqDh8b8Bp0qkpc5+w0G1BdX7q1RG6Z3zPjW0lW+hXn8CA8l6" crossorigin="anonymous"></script>
</body>

</html>
