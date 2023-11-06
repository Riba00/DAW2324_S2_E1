
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <!-- Enlazar archivo CSS de Bootstrap (desde node_modules) -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white " href="/"><b>VirtualVision</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Vistes/imagePrompt.php">Generar Imagen</a>
                    </li>
                    
                    <li class="nav-item position-absolute end-0 me-5" id="registre-li">
                        <a class="nav-link text-white" href="/Vistes/login.php">Iniciar Sessión</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>