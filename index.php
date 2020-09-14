<?php
require __DIR__ . "/vendor/autoload.php";
include "src/middleware/auth.php";
$studentController = new \app\controller\StudentController();
$page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : NULL;

switch ($page) {
    case "display":
        $studentController->displayAllStudent();
        break;
    case "add":
        $studentController->addStudent();
        break;
    case "delete":
        $studentController->deleteStudent();
        break;
    case "update":
        $studentController->updateStudent();
        break;
    default:
        $studentController->displayAllStudent();
}