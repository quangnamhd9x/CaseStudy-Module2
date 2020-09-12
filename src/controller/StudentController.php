<?php
namespace app\controller;
use app\model\Student;
use app\model\StudentModel;

class StudentController
{
    protected $studentController;

    public function __construct()
    {
        $this->studentController = new StudentModel();
    }
    public function displayAllStudent(){
        $students = $this->studentController->getAllStudent();
        include_once "src/view/listStudent.php";
    }
    public function addStudent(){
        if ($_SERVER["REQUEST_METHOD"] == 'GET') {
            include_once 'src/view/addStudent.php';
        } else {
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $birthday = $_POST["birthday"];
            $address = $_POST["address"];
            $file = $_FILES['image']['tmp_name'];
            $path = "src/uploads/" . $_FILES['image']['name'];
            if (move_uploaded_file($file, $path)) {
                echo "Tải tập tin thành công";
            } else {
                echo "Tải tập tin thất bại";
            }
            $student = new Student($name, $birthday, $address, $gender);
            $student->setImage($path);
            $this->studentController->addStudent($student);
            header("location:index.php");
        }
    }
    public function deleteStudent()
    {
        $id = $_REQUEST['id'];
        $this->studentController->deleteStudent($id);
        header("location:index.php");
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
            $image = $_REQUEST['image'];
            $gender = $_REQUEST['gender'];
            $student = new Student($name, $birthday, $address, $image, $gender);
            $student->setId($id);

            $this->studentController->updateStudent($student);
            header('location:index.php');
        }
    }
}