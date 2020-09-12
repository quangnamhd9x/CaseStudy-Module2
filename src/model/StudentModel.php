<?php

namespace app\model;

class StudentModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connectDB();
    }

    public function getAllStudent()
    {
        $sql = "SELECT * FROM 11A2";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $student = new Student($items["name"], $items["birthday"], $items["address"], $items["gender"]);
            $student->setId($items["id"]);
            $img = $items["image"] == "src/uploads/" ? "src/uploads/default.png" : $items["image"];
            $student->setImage($img);
            array_push($array, $student);
        }
        return $array;
    }

    public function addStudent($student)
    {
        $sql = "INSERT INTO `11A2`(`name`, `birthday`, `address`, `image`, `gender`) VALUES (:name, :birthday, :address, :image, :gender)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":birthday", $student->getBirthday());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":image", $student->getImage());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $sql = "SELECT * FROM 11A2 WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function deleteStudent($id)
    {
        $sql = "DELETE FROM 11A2 WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function updateStudent($student)
    {
        $sql = "UPDATE 11A2 
                SET name = :name, 
                birthday = :birthday,
                address = :address,
                image = :image,
                gender = :gender, 
                WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student->getId());
        $stmt->bindParam(":name", $student->getName());
        $stmt->bindParam(":birthday", $student->getBirthday());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":image", $student->getImage());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->execute();
    }
}