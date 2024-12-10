<?php session_start();
require_once 'autoload.php';

if (isset($_SESSION['user'])) {
    header("Location: views/main.php");
    exit();
}

$page = $_GET['page'] ?? 'landing_page';
$action = $_GET['action'] ?? 'index';

switch ($page) {
    case 'landing_page':
        $controller = new HomeController();
        $controller->mostrarLanding_Page();
        break;

    case 'login':
        $controller = new FormController();
        if ($action === 'authenticate') {
            $controller->loginUsuario();
        } else {
            $controller->mostrarLoginUsuario();
        }
        break;

    case 'register':
        $controller = new FormController();
        if ($action === 'store') {
            $controller->registrarUsuario();
        } else {
            $controller->mostrarRegistroUsuario();
        }
        break;

    default:
        echo "Error 404.";
        break;
}
?>
