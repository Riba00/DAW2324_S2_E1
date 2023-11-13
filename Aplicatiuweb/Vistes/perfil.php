<?php session_start(); 
if(!isset($_SESSION['usuario_nombre'])) {
    header("Location: /Vistes/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'navbar.php';?>
<head>
    <script>
        function validarFormulario() {
            var nombre = document.getElementById('nombre').value.trim();
            var email = document.getElementById('email').value.trim();

            // Restablecer colores de fondo a blanco
            document.getElementById('nombre').style.backgroundColor = 'white';
            document.getElementById('email').style.backgroundColor = 'white';

            // Validar campos
            if (nombre === '') {
                mostrarError('Por favor, complete el campo Nombre.');
                document.getElementById('nombre').style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
                return false;
            }

            if (email === '') {
                mostrarError('Por favor, complete el campo Correo Electrónico.');
                document.getElementById('email').style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
                return false;
            }

            return true;
        }

        function mostrarError(mensaje) {
            var mensajeError = document.getElementById('mensaje-error');
            mensajeError.style.display = 'block';
            mensajeError.innerHTML = escapeHTML(mensaje);
        }

        function escapeHTML(str) {
            var div = document.createElement('div');
            div.appendChild(document.createTextNode(str));
            return div.innerHTML;
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre'], ENT_QUOTES, 'UTF-8'); ?>!</h1>
        <p>ID de Usuario: <?php echo htmlspecialchars($_SESSION['usuario_id'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p>Correo Electrónico: <?php echo htmlspecialchars($_SESSION['usuario_email'], ENT_QUOTES, 'UTF-8'); ?></p>

        <!-- Formulario de actualización -->
        <h2>Actualizar Datos</h2>
        <form method="post" action="/Controladors/controlador_perfil.php" onsubmit="return validarFormulario()">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($_SESSION['usuario_nombre'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION['usuario_email'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <button type="submit" id="cerrar_sesion" name="cerrar_sesion" class="btn btn-secondary">Cerrar Sesión</button>
            <button type="submit" id="cerrar_sesion" name="borrar_cuenta" class="btn btn-danger position-absolute end-0 me-5">Borrar Cuenta</button>

            <div id="mensaje-error" class="alert alert-danger" style="display: none;"></div>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    
    <!-- Scripts de Bootstrap u otros scripts adicionales -->
</body>

</html>
