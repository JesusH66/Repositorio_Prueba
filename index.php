<?php
// Cargamosla configuración
require_once 'config.php';
// Cargamos el controlador
require_once './controller/LoginController.php';

//Creamos una instancia del controlador
$controller = new LoginController();

// Manejamos la acción basada en el parámetro
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

switch ($action) {
    case 'register':
        $controller->showRegisterPage();
        break;
    case 'login':
        $controller->showLoginPage();
        break;
    case 'do_register':
        $controller->register();
        break;
    case 'do_login':
        $controller->login();
        break;
    default:
        $controller->showLoginPage();
        break;
}