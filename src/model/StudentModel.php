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
        $sql = "SELECT * FROM students";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $student = new Student($items["name"], $items["birthday"], $items["address"], $items["gender"]);
            $student->setId($items["id"]);
            $img = $items["image"] == "src/uploads/" ? "src/uploads/default.jpg" : $items["image"];
            $student->setImage($img);
            array_push($array, $student);
        }
        return $array;
    }

    public function addStudent($student)
    {
        $sql = "INSERT INTO `students`(`name`, `birthday`, `address`, `image`, `gender`) VALUES (:name, :birthday, :address, :image, :gender)";
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
        $sql = "SELECT * FROM students WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function deleteStudent($id)
    {
        $this->deleteScoreStudent($id);
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
    public function deleteScoreStudent($studentId){
        $sql = "DELETE FROM scores WHERE student_id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $studentId);
        $stmt->execute();
    }

    public function updateStudent($student)
    {
        {
            $sql = "UPDATE students 
                SET name = :name, 
                birthday = :birthday,
                address = :address,
                image = :image
                WHERE id = :id";
            $stmt = $this->database->prepare($sql);
            $stmt->bindParam(":id", $student->getId());
            $stmt->bindParam(":name", $student->getName());
            $stmt->bindParam(":birthday", $student->getBirthday());
            $stmt->bindParam(":address", $student->getAddress());
            $stmt->bindParam(":image", $student->getImage());
            $stmt->execute();
        }
    }
}