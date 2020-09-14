<?php


namespace app\model;


class UserManager
{
    protected $databaseUser;

    public function __construct()
    {
        $database = new DBconnect();
        $this->databaseUser = $database->connectDB();
    }

    function getUser($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->databaseUser->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}