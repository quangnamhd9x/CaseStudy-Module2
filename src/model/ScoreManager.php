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
    public function getScoreById($id)
    {
        $sql = "SELECT * FROM scores WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function getAll()
    {
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
            $score = new Score($items["name"], $items["subject_name"], $items["score"]);
            $score->setId($items["id"]);
            array_push($array, $score);
        }
        return $array;
    }


    public function updateScore($score)
    {
        {
            $sql = "UPDATE `scores` 
SET `score`= :score 
WHERE id = :id";
            $stmt = $this->database->prepare($sql);
            $stmt->bindParam(":id", $score->getId());
            $stmt->bindParam(":score", $score->getScore());
            $stmt->execute();
        }
    }
    public function getRank(){
        $sql = "SELECT scores.id, students.name, subjects.subject_name, scores.score
FROM students
INNER JOIN scores
ON students.id = scores.student_id
INNER JOIN subjects
ON scores.subject_id = subjects.id 
ORDER BY `scores`.`score` DESC LIMIT 10";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $score = new Score($items["name"], $items["subject_name"], $items["score"]);
            $score->setId($items["id"]);
            array_push($array, $score);
        }
        return $array;
    }
    public function getFail(){
        $sql = "SELECT scores.id, students.name, subjects.subject_name, scores.score
FROM students
INNER JOIN scores
ON students.id = scores.student_id
INNER JOIN subjects
ON scores.subject_id = subjects.id 
ORDER BY `scores`.`score` ASC LIMIT 10";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $score = new Score($items["name"], $items["subject_name"], $items["score"]);
            $score->setId($items["id"]);
            array_push($array, $score);
        }
        return $array;
    }
}