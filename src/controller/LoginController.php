<?php


namespace app\controller;
use app\model\UserManager;

class LoginController
{
    protected $login;

    public function __construct()
    {
        $this->login = new LoginController();
    }
    function login($username, $password){
        $result = $this->getUser($username, $password);
        if (is_array($result)){
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $result;
            header('location:../../../index.php');
        } else {
            header('location:login.php');
        }
    }
}