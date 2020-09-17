<?php
session_start();
require __DIR__ . "/vendor/autoload.php";
$auth = new \app\mid\Auth();
$auth->isLogin();

$studentController = new \app\controller\StudentController();
$userController = new \app\controller\UserController();
$scoreController = new \app\controller\ScoreController();
$scheduleController = new \app\controller\ScheduleController();

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
    case "logOut":
        $userController->logOut();
        break;
    case "viewAllScore":
        $scoreController->displayAll();
        break;
    case "viewSubject":
        $scoreController->displaySubject();
        break;
    case "updateScore":
        $scoreController->updateScore();
        break;
    case "viewRank":
        $scoreController->displayRank();
        break;
    case "viewFail":
        $scoreController->displayFail();
        break;
    case "viewAverage":
        $scoreController->displayAverage();
        break;
    case "showInfo":
        $scoreController->search();
        break;
    case "showSchedule":
        $scheduleController->displayAllSchedule();
        break;
    case "addSchedule":
        $scheduleController->addSchedule();
        break;
    case "deleteSchedule":
        $scheduleController->deleteSchedule();
        break;
    default:
        $studentController->displayAllStudent();
}