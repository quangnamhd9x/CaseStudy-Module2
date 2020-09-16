<?php
session_start();
require '../../../vendor/autoload.php';


$controllerUser = new \app\controller\UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $controllerUser->login($username,$password);
}else{
    $controllerUser->logOut();
}


?>