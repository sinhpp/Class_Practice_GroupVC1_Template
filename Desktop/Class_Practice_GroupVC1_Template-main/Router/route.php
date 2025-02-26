<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserprofileController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);


// user profile
$route->get("/userprofile", [UserController::class, 'profile']);

$route->route();