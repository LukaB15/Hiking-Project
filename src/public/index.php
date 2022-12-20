<?php
declare(strict_types=1);

session_start();

require '../vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $productController = new ProductController();
    $productController->index();
}

/*$routes = [
    'login' => [AuthController::class, 'showLoginForm()'],
    ...
];*/

<<<<<<< HEAD
if ($url === 'add') {
    $add = new AddController();
    if ($method === 'GET') {
        $add->showAddForm();
    }
}
// if ($url === 'login') {
//     $authController = new AuthController();
=======
if ($url === 'login') {
    $authController = new AuthController();
>>>>>>> luka2

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }
}

if ($url === 'product') {
<<<<<<< HEAD
     $name = $_GET['name'];
     $productController = new ProductController();
     $productController->show($name);
=======
    $code = $_GET['name'];
    $productController = new ProductController();
    $productController->show($code);
>>>>>>> luka2
}

if ($url === 'logout') {
    $authController  = new AuthController();
    $authController->logout();
}