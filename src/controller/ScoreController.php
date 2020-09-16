<?php

namespace app\controller;

use app\model\Score;
use app\model\ScoreManager;
use app\model\SubjectManager;

class ScoreController
{
    protected $scoreController;
    protected $subjectController;

    public function __construct()
    {
        $this->scoreController = new ScoreManager();
//        $this->subjectController = new SubjectManager();
        $this->subjectController = new ScoreManager();
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

}
//
//$scores = $this->scoreController->getAllScore();
//include_once "src/view/subjects/score.php";





//    public function addStudent(){
//        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
//            include_once 'src/view/addStudent.php';
//        } else {
//            $name = $_POST["name"];
//            $gender = $_POST["gender"];
//            $birthday = $_POST["birthday"];
//            $address = $_POST["address"];
//            $file = $_FILES['image']['tmp_name'];
//            $path = "src/uploads/" . $_FILES['image']['name'];
//            if (move_uploaded_file($file, $path)) {
//                echo "Tải tập tin thành công";
//            } else {
//                echo "Tải tập tin thất bại";
//            }
//            $student = new Student($name, $birthday, $address, $gender);
//            $student->setImage($path);
//            $this->studentController->addStudent($student);
//            header("location:index.php");
//        }
//    }
//    public function deleteStudent()
//    {
//        $id = $_REQUEST['id'];
//        $this->studentController->deleteStudent($id);
//        header("location:index.php");
//    }
//    public function updateStudent()
//    {
//        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
//            $id = $_REQUEST["id"];
//            $student = $this->studentController->getStudentById($id);
//            include_once 'src/view/updateStudent.php';
//        } else {
//            $id = $_REQUEST['id'];
//            $name = $_REQUEST['name'];
//            $birthday = $_REQUEST['birthday'];
//            $address = $_REQUEST['address'];
//            $std = $this->studentController->getStudentById($id);
//            $img = $std["image"];
//            $gender = $_REQUEST['gender'];
//            $file = $_FILES['image']['tmp_name'];
//            $path = "src/uploads/" . $_FILES['image']['name'];
//            if (move_uploaded_file($file, $path)) {
//                echo "Tải tập tin thành công";
//            } else {
//                echo "Tải tập tin thất bại";
//            }
//            $image = $path == "src/uploads/"?$img:$path;
//            $student = new Student($name, $birthday, $address, $gender);
//            $student->setId($id);
//            $student->setImage($image);
//            $this->studentController->updateStudent($student);
//            header('location:index.php');
//        }
//    }
