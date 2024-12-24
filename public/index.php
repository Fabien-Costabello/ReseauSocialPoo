<?php

include_once("../src/models/Db.php");
include_once("../core/Router.php");
include_once('../src/models/repositories/UserRepositories.php');

include_once('../src/models/User.php');
include_once('../src/models/repositories/PostRepositories.php');
include_once('../src/models/repositories/LikeRepositories.php');
include_once('../src/models/repositories/DislikeRepositories.php');
include_once('../src/models/Post.php');
include_once('../src/models/Like.php');
include_once('../src/models/Dislike.php');
include_once('../src/models/AuthGuard.php');
include_once("../src/controllers/Controller.php");
include_once("../src/controllers/MainController.php");
include_once("../src/controllers/RegisterController.php");
include_once("../src/controllers/LoginController.php");
include_once("../src/controllers/LogOutController.php");
include_once("../src/controllers/DeleteController.php");
include_once("../src/controllers/AddController.php");
include_once("../src/controllers/EditController.php");
include_once("../src/controllers/LikeController.php");
include_once("../src/controllers/DislikeController.php");




try {
    $router = new Router();
    $router->start();
} catch (PDOException $err) {
    echo ($e->getMessage());
}



