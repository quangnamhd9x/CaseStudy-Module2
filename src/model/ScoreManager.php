<?php

namespace app\model;

class ScoreManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connectDB();
    }

    public function getSubject($id)
    {
        $sql = "SELECT scores.id, students.name, subjects.subject_name, scores.score
FROM students
INNER JOIN scores
ON students.id = scores.student_id
INNER JOIN subjects
ON scores.subject_id = subjects.id
WHERE subjects.id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $score = new Score($items["name"], $items["subject_name"], $items["score"]);
            $score->setId($items["id"]);
            array_push($array, $score);
        }
        return $array;
    }





    public function getAll(){
        $sql = "SELECT scores.id, students.name, subjects.subject_name, scores.score
FROM students
INNER JOIN scores
ON students.id = scores.student_id
INNER JOIN subjects
ON scores.subject_id = subjects.id";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $scoreMath = new Score($items["name"], $items["subject_name"], $items["score"]);
            $scoreMath->setId($items["id"]);
            array_push($array, $scoreMath);
        }
        return $array;
    }







//    public function addStudent($student)
//    {
//        $sql = "INSERT INTO `students`(`name`, `birthday`, `address`, `image`, `gender`) VALUES (:name, :birthday, :address, :image, :gender)";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(":name", $student->getName());
//        $stmt->bindParam(":birthday", $student->getBirthday());
//        $stmt->bindParam(":address", $student->getAddress());
//        $stmt->bindParam(":image", $student->getImage());
//        $stmt->bindParam(":gender", $student->getGender());
//        $stmt->execute();
//    }
//
//    public function getStudentById($id)
//    {
//        $sql = "SELECT * FROM students WHERE id = :id";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(":id", $id);
//        $stmt->execute();
//        $data = $stmt->fetch();
//        return $data;
//    }
//
//    public function deleteStudent($id)
//    {
//        $sql = "DELETE FROM students WHERE id = :id";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(":id", $id);
//        $stmt->execute();
//    }
//
//    public function updateStudent($student)
//    {
//        {
//            $sql = "UPDATE students
//                SET name = :name,
//                birthday = :birthday,
//                address = :address,
//                image = :image
//                WHERE id = :id";
//            $stmt = $this->database->prepare($sql);
//            $stmt->bindParam(":id", $student->getId());
//            $stmt->bindParam(":name", $student->getName());
//            $stmt->bindParam(":birthday", $student->getBirthday());
//            $stmt->bindParam(":address", $student->getAddress());
//            $stmt->bindParam(":image", $student->getImage());
//            $stmt->execute();
//        }
//    }
}