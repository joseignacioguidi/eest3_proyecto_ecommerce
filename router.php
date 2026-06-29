<?php
require_once 'app/funciones.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// http://localhost/EEST3_2026/proyecto_ecommerce/

//var_dump($_GET['url']); //Imprime lo que contiene la variable.
$action = 'home';
if (!empty($_GET['url'])) {
    $action = $_GET['url'];
}


$params = explode('/', $action);
//var_dump($params);
switch ($params[0]) {
    case 'home':
        showEcommerceHome();
        break;
    case 'productos':
        showAllProducts();
        break;
    default:
        echo 'error 404';
}

