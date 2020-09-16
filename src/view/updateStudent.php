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
<div>
    <a style="font-size: 20px; margin-left: 20px" class="btn btn-warning" href="CaseStudy-School/index.php">Trở về</a>
</div>
<br>
<br>
<br>
<form method="POST" enctype="multipart/form-data">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead class="thead-dark">
        <tr>
            <td>Họ tên:</td>
            <td><input style="width: 280px" name="name" type="text" required value="<?php echo $student["name"]; ?>"></td>
        </tr>
        <tr>
            <td>Giới tính:</td>
            <td><input style="width: 280px" name="gender" type="text" required value="<?php echo $student["gender"]; ?>"></td>
        </tr>
        <tr>
            <td>Ngày Sinh:</td>
            <td><input style="width: 280px" name="birthday" type="date" required value="<?php echo $student["birthday"]; ?>"></td>
        </tr>
        <tr>
            <td>Địa chỉ:</td>
            <td><input style="width: 280px" name="address" type="text" required value="<?php echo $student["address"]; ?>"></td>
        </tr>
        <tr>
            <td>Ảnh:</td>
            <td><input name="image" type="file"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Update</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
