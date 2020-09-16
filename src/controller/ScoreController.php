<?php

namespace app\controller;

use app\model\Score;
use app\model\ScoreManager;
use app\model\Student;
use app\model\SubjectManager;

class ScoreController
{
    protected $scoreController;
    protected $subjectController;

    public function __construct()
    {
        $this->scoreController = new ScoreManager();
    }

    public function displaySubject()
    {
        $id = $_REQUEST["id"];
        $subject = $this->scoreController->getSubject($id);
        include_once "src/view/subjects/scoreSubject.php";
    }

    public function displayAll()
    {
        $scores = $this->scoreController->getAll();
        include_once "src/view/subjects/score.php";
    }

    public function updateScore()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $id = $_REQUEST["id"];
            $scores = $this->scoreController->getScoreById($id);
            include_once 'src/view/updateScore.php';
        } else {
            $id = $_REQUEST['id'];
            $studentName = $_REQUEST['student_id'];
            $subjectName = $_REQUEST['subject_id'];
            $score = $_REQUEST['score'];
            $scores = new Score($studentName, $subjectName, $score);
            $scores->setId($id);
            $this->scoreController->updateScore($scores);
            header('location:src/view/subjects.php');
        }
    }
}
