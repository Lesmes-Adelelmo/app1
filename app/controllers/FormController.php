<?php
class FormController {
    public function mostrarLoginUsuario() {
        include 'views/forms/login_user.php';
    }
    
    public function loginUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nick = $_POST['nick'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new User();
            $success = $user->buscarUsuarioPorNickYEmail($nick, $email);

            if ($success && $user->getPassword() === $password) {
                $_SESSION['user'] = $user->getNicK();
                header("Location: index.php");
                exit();
            } else {
                echo "Error al iniciar sesion.";
            }
        }
    }

    public function mostrarRegistroUsuario() {
        include 'views/forms/register_user.php';
    }
    
    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nick = $_POST['nick'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];
            $apellido1 = $_POST['apellido1'];
            $apellido2 = $_POST['apellido2'] ?? NULL; // Campo opcional
            $tipo_via = $_POST['tipo_via'];
            $nombre_via = $_POST['nombre_via'];
            $numero = $_POST['numero'];
            $telefono = $_POST['telefono'];

            $user = new User();
            $success = $user->crearUsuario($nick, $email, $password, $nombre, $apellido1, $apellido2, $tipo_via, $nombre_via, $numero, $telefono);

            if ($success) {
                header("Location: index.php?page=login");
                exit();
            } else {
                echo "Error al registrar el usuario.";
            }
        }
    }
}
?>
