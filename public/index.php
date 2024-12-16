<?php
include_once("../core/Router.php");
include_once("../src/controllers/Controller.php");
include_once("../src/controllers/MainController.php");
include_once("../src/controllers/RegisterController.php");
include_once("../src/controllers/LoginController.php");
include_once("../src/controllers/LogOutController.php");

include_once("../src/models/Db.php");
include_once('../src/models/repositories/UserRepositories.php');
include_once('../src/models/User.php');

try {
    $router = new Router();
    $router->start();
} catch (PDOException $err) {
    echo($e->getMessage());
}



