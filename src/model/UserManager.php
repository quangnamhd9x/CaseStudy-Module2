<?php


namespace app\model;


class UserManager
{
    protected $databaseUser;

    public function __construct()
    {
        $db = new DBconnect();
        $this->databaseUser= $db->connectDB();
    }

    function getUser($username,$password){
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $this->databaseUser->prepare($sql);
        $statement->bindParam(':username',$username);
        $statement->bindParam(':password',$password);
        $statement->execute();
        return $statement->fetch();
    }
}