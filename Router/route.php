<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
<<<<<<< HEAD
require_once "Controllers/UserController.php";
require_once "Controllers/NotificationController.php";
require_once "Controllers/LoginController.php";
require_once "Controllers/IconController.php";
=======
require_once "Controllers/PytographyController.php";
>>>>>>> mesa


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);
<<<<<<< HEAD
$route->get("/table-list", [UserController::class, "tableList"]);
$route->get("/notifications", [NotificationController::class, 'notification']);
$route->get("/icon", [IconController::class, 'icon']);


// login
$route->get("/login", [LoginController::class, 'login']);
=======
$route->get("/pytography", [PytographyController::class, 'welcome']);
>>>>>>> mesa

$route->route();