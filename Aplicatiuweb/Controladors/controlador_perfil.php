<?php 
session_start();
require_once '../Model/user_class.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function actualizarUsuario($id, $nombre, $email) {
        // Validar datos
        if ($this->validarDatos($nombre, $email)) {
            // Actualizar usuario en la base de datos
            if ($this->userModel->actualizarUsuario($id, $nombre, $email)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    private function validarDatos($nombre, $email) {
        // Implementar lógica de validación aquí (longitud, formato de correo, etc.)
        // Devolver true si los datos son válidos, false si no lo son
        return true;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cerrar_sesion'])) {
    // Destruir la sesión
    session_destroy();
    session_unset();
    // Redirigir a la página de inicio de sesión
    header("Location: /Vistes/login.php");
    exit();
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['borrar_cuenta'])) {
    $usuari = new User();
    $borrarcuenta = $usuari->borrarCuenta($_SESSION['usuario_email']);
    session_destroy();
    session_unset();
    header("Location: /Vistes/registre.php");
    exit();
}

elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nombre']) && !empty($_POST['email'])) {
        // Asegurar que la sesión esté iniciada y el usuario esté autenticado
        if (isset($_SESSION['usuario_id'])) {
            $id = $_SESSION['usuario_id'];
            $nuevoNombre = $_POST['nombre']; // Asignar el valor del formulario a $nuevoNombre
            $nuevoEmail = $_POST['email']; // Asignar el valor del formulario a $nuevoEmail

            // Llamada al método actualizarUsuario del controlador
            $userController = new UserController();

            // Actualizar el usuario en la base de datos y verificar si la actualización fue exitosa
            if ($userController->actualizarUsuario($id, $nuevoNombre, $nuevoEmail)) {
                // Actualizar las variables de sesión con los nuevos valores
                $_SESSION['usuario_nombre'] = $nuevoNombre;
                $_SESSION['usuario_email'] = $nuevoEmail;

                // Redirigir a la página de perfil con un mensaje de éxito
                header("Location: /Vistes/perfil.php");

                //require '../Vistes/perfil.php';
                exit();
            } else {
                // La actualización en la base de datos falló, redirigir con un mensaje de error
                header("Location: /Vistes/perfil.php?error=1");
                exit();
            }
        } else {
            // El usuario no está autenticado, redirigir a la página de inicio de sesión
            require '../Vistes/login.php';
            exit();
        }
    }
}
}

?>