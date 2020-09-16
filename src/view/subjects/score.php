<?php
include_once "../../../src/controller/ScoreController.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
        background-image: url("https://www.setaswall.com/wp-content/uploads/2017/03/Blue-Sky-And-Green-Grass-Wallpaper-1920x1200.jpg");
        background-repeat: unset;
        background-position: left top;
        background-attachment: fixed;
    }
    .table {
        background-color: white;
    }
    a {
        color: white;
    }
    th {
        text-align: center;
    }
    h1 {
        color: white;
        font-family: -apple-system;
        font-size: 50px;
        text-align: center;
    }
</style>
<body>
<h1><button style="font-size: 50px" class="btn btn-info">Lớp 11A2 - Victory</button></h1>
<div align="center">
    <a class="btn btn-warning" href="http://localhost/CaseStudy-School/index.php">Trở về</a>
    <a class="btn btn-success" href="index.php?page=add">Thêm học sinh</a>
    <a class="btn btn-success" href="src/view/subjects.php">Xem điểm</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/src/view/schedule.php">Xem thời khóa biểu</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/src/view/note.php">Đặt lời nhắc cho lớp</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/index.php?page=viewRank">Top thi đua trong lớp</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/index.php?page=viewFail">Học sinh lưu tâm</a>
    <a class="btn btn-danger" href="index.php?page=logOut">Đăng xuất</a>
</div>
<br>
<table align="center" class="table" style="width: 1000px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Môn học</th>
        <th scope="col">Điểm</th>
<!--        <th colspan="2" scope="col">Tùy chọn</th>-->
    </tr>
    </thead>
    <tbody>
    <?php foreach ($scores as $key=>$score): ?>
        <tr>
            <td align="center"><?php echo ++$key; ?></td>
            <td><?php echo $score->getStudentName(); ?></td>
            <td><?php echo $score->getSubjectName(); ?></td>
            <td align="center"><?php echo $score->getScore(); ?></td>
<!--            <td><button class="btn btn-info"><a href="index.php?page=update&id=--><?php //echo $student->getId(); ?><!--">Cập nhật</a> </button></td>-->
<!--            <td><button class="btn btn-danger"><a onclick="return confirm('Bạn chắc chứ?')" href="index.php?page=delete&id=--><?php //echo $student->getId(); ?><!--">Xóa</a> </button></td>-->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>