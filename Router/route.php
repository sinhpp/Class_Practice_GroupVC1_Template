<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/NotificationController.php";
require_once "Controllers/LoginController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);
$route->get("/table-list", [UserController::class, "tableList"]);
$route->get("/notifications", [NotificationController::class, 'notification']);


// login
$route->get("/login", [LoginController::class, 'login']);

$route->route();