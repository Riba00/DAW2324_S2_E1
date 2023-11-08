<?php 
session_start();
if(isset($_SESSION['usuario_nombre'])) {
    // La sesión está iniciada, redirigir a la página de perfil o a la página que desees
    header("Location: /Vistes/perfil.php");
    exit();
}?>

<!DOCTYPE html>
<html lang="en">

<?php include 'navbar.php'; ?>

<body>
    <div class="container mt-5">
        <h1>Iniciar Sesión</h1>

        <!-- Formulario de Inicio de Sesión -->
        <form method="post" action="/Controladors/procesar_login.php">
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="escriba su contraseña" required>
            </div>

            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            <a href="registre.php" class="btn btn-secondary">Registrarse</a>
            
        </form>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua3HL5e0NnqDh8b8Bp0qkpc5+w0G1BdX7q1RG6Z3zPjW0lW+hXn8CA8l6" crossorigin="anonymous"></script>
</body>

</html>
