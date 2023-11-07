<?php
require_once '../Model/user_class.php';

class ControladorRegistro {
    public function __construct() {}

    public function registrarUsuario($nombre, $email, $contrasena, $confirmarContrasena) {
        // Verificar si los campos no están vacíos
        if (!empty($nombre) && !empty($email) && !empty($contrasena) && !empty($confirmarContrasena)) {
            // Verificar si las contraseñas coinciden
            if ($contrasena == $confirmarContrasena) {
                $usuari = new User();

                if ($usuari->registrarUsuario($nombre, $email, $contrasena)) {
                    // Obtener el ID del usuario registrado
                    $idDelUsuario = $usuari->getLastInsertedUserId();

                    // Iniciar sesión y almacenar el ID del usuario en la sesión
                    session_start();
                    $_SESSION['usuario_id'] = $idDelUsuario;
                    $_SESSION['usuario_nombre'] = $nombre;
                    $_SESSION['usuario_email'] = $email;

                    // Redirigir a la página de perfil
                    header("Location: /Vistes/perfil.php");
                    exit();
                } else {
                    echo "Error al crear el usuario.";
                }
            } else {
                echo "Las contraseñas no coinciden.";
            }
        } else {
            echo "Por favor, complete todos los campos del formulario.";
        }
    }
}

// Uso del controlador en el contexto de una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['usuari'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $confirmarContrasena = $_POST['confirmar_contrasena'];

    // Instanciar el controlador y llamar al método registrarUsuario
    $controladorRegistro = new ControladorRegistro();
    $controladorRegistro->registrarUsuario($nombre, $email, $contrasena, $confirmarContrasena);
}
?>
