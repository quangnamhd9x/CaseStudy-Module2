<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<div>
    <a style="margin-top: 10px; margin-left: 10px; font-size: 18px" class="btn btn-warning" href="../../index.php">Trở về</a>
</div>
<h1>
    <button style="font-size: 50px" class="btn btn-info">Lớp 11A2 - Victory</button>
</h1>
<div align="center">
    <a class="btn btn-success" href="addStudent.php">Thêm học sinh</a>
    <a class="btn btn-success" href="subjects.php">Xem điểm</a>
    <a class="btn btn-success" href="schedule.php">Xem thời khóa biểu</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/src/view/note.php">Đặt lời nhắc cho lớp</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/index.php?page=viewRank">Top thi đua trong
        lớp</a>
    <a class="btn btn-success" href="http://localhost/CaseStudy-School/index.php?page=viewFail">Học sinh lưu tâm</a>
    <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0" method="post"
          action="index.php?page=showInfo">
        <input name="search" class="form-control" type="search" placeholder="Tìm kiếm học sinh"
               aria-label="Search">
        <button style="background-color: lightskyblue" class="btn btn-success" type="submit">Search</button>
    </form>
    <a class="btn btn-danger" href="http://localhost/CaseStudy-School/src/view/users/login.php">Đăng xuất</a>
</div>
<br>
<table style="border-radius: 15px" align="center" cellpadding="15px">
    <tr>
        <td><a style="font-size: 50px; width: 300px; background-color: darkorange" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=1">Toán học</a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: cornflowerblue" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=2">Vật lý</></a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: rebeccapurple" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=3">Hóa Học</></a></td>
    </tr>
    <tr>
        <td><a style="font-size: 50px; width: 300px; background-color: green" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=4">Sinh học</a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: darkslategray" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=5">Tin học</></a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: deepskyblue" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=6">Tiếng Anh</></a></td>
    </tr>
    <tr>
        <td><a style="font-size: 50px; width: 300px; background-color: rosybrown" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=7">Ngữ văn</></a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: brown" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=8">Lịch sử</></a></td>
        <td><a style="font-size: 50px; width: 300px; background-color: green" class="btn btn-success"
               href="../../index.php?page=viewSubject&id=9">Giáo dục</></a></td>
    </tr>
    <tr align="center">
        <td colspan="3">
            <a style="font-size: 50px; width: 400px; background-color: blueviolet" class="btn btn-success"
                        href="../../index.php?page=viewAllScore">Xem toàn bộ</a>
            <a style="font-size: 50px; width: 500px; background-color: blueviolet" class="btn btn-success"
                        href="../../index.php?page=viewAverage">Xem điểm trung bình</a>
        </td>
    </tr>
</table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>