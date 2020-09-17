<?php


namespace app\model;


class ScheduleModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connectDB();
    }

    public function getAllSchedule()
    {
        $sql = "SELECT * FROM schedules";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $schedule = new Schedule($items["note"]);
            $schedule->setId($items["id"]);
            $img = $items["image"] == "src/uploads/" ? "src/uploads/default.jpg" : $items["image"];
            $schedule->setImage($img);
            array_push($array, $schedule);
        }
        return $array;
    }

    public function addSchedule($schedule)
    {
        $sql = "INSERT INTO `schedules`(`image`, `note`) VALUES (:image, :note)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":image", $schedule->getImage());
        $stmt->bindParam(":note", $schedule->getNote());
        $stmt->execute();
    }

    public function getScheduleById($id)
    {
        $sql = "SELECT * FROM schedules WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function deleteSchedule($id)
    {
        $sql = "DELETE FROM `schedules` WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
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