<?php


namespace app\controller;


use app\model\Schedule;
use app\model\ScheduleModel;
use app\model\Student;
use app\model\StudentModel;

class ScheduleController
{
    protected $scheduleController;

    public function __construct()
    {
        $this->scheduleController = new ScheduleModel();
    }
    public function displayAllSchedule(){
        $schedules = $this->scheduleController->getAllSchedule();
        include_once "src/view/schedule.php";
    }
    public function addSchedule(){
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            include_once 'src/view/addSchedule.php';
        } else {
            $note = $_POST["note"];
            $file = $_FILES['image']['tmp_name'];
            $path = "src/uploads/" . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $schedule = new Schedule($note);
            $schedule->setImage($path);
            $this->scheduleController->addSchedule($schedule);
            header("location:index.php?page=showSchedule");
        }
    }
    public function deleteSchedule()
    {
        $id = $_REQUEST['id'];
        $this->scheduleController->deleteSchedule($id);
        header("location:index.php?page=showSchedule");
    }

    public function updateStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            $id = $_REQUEST["id"];
            $student = $this->studentController->getStudentById($id);
            include_once 'src/view/updateStudent.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $birthday = $_REQUEST['birthday'];
            $address = $_REQUEST['address'];
            $std = $this->studentController->getStudentById($id);
            $img = $std["image"];
            $gender = $_REQUEST['gender'];
            $file = $_FILES['image']['tmp_name'];
            $path = "src/uploads/" . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $image = $path == "src/uploads/"?$img:$path;
            $student = new Student($name, $birthday, $address, $gender);
            $student->setId($id);
            $student->setImage($image);
            $this->studentController->updateStudent($student);
            header('location:index.php');
        }
    }
}