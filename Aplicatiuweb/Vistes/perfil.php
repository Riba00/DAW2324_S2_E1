<?php session_start(); 
if(!isset($_SESSION['usuario_nombre'])) {
    // La sesión está iniciada, redirigir a la página de perfil o a la página que desees
    header("Location: /Vistes/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'navbar.php'; ?>

<body>
    <div class="container mt-5">
        <h1>Bienvenido, <?php echo $_SESSION['usuario_nombre']; ?>!</h1>
        <p>ID de Usuario: <?php echo $_SESSION['usuario_id']; ?></p>
        <p>Correo Electrónico: <?php echo $_SESSION['usuario_email']; ?></p>

        <!-- Formulario de actualización -->
        <h2>Actualizar Datos</h2>
        <form method="post" action="/Controladors/controlador_perfil.php">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $_SESSION['usuario_nombre']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['usuario_email']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <button type="submit" id="cerrar_sesion" name="cerrar_sesion" class="btn btn-secondary">Cerrar Sesión</button>
            <button type="submit" id="cerrar_sesion" name="borrar_cuenta" class="btn btn-danger">Borrar Cuenta</button>

        </form>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Scripts de Bootstrap u otros scripts adicionales -->
</body>

</html>
