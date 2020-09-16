<?php
session_start();
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
        background-image: url("../../uploads/background1.jpeg");
        background-repeat: repeat;
        background-position: left top;
        background-attachment: fixed;
    }
    .table {
        background-color: white;
        color: white;
        margin-left: 35%;
        margin-top: 15%;
    }
    a {
        color: white;
    }
    th {
        text-align: center;
    }
    h1 {
        color: yellow;
        font-family: "Apple Color Emoji";
        font-size: 50px;
        text-align: center;
    }

</style>
<body>

<form method="POST" action="checkLogin.php" >
    <table align="center" class="table" style="width: auto; border-radius: 20px">
        <thead class="thead-dark">
        <tr>
            <td><a href="https://facebook.com/quangnamhd9x"><img style="width: 40px; border-radius: 5px" src="https://image.flaticon.com/icons/png/512/124/124010.png"></a>
                <a href="https://www.youtube.com/channel/UCwEh1EJ7vypRzkzXSNorx2w?view_as=subscriber"><img style="width: 40px; height: 40px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/YouTube_play_buttom_icon_%282013-2017%29.svg/800px-YouTube_play_buttom_icon_%282013-2017%29.svg.png"></a> </td>
            <td><button type="button" style="width: 250px;background-color: cornflowerblue" class="btn btn-secondary"><b>Chúc các thầy mạnh khỏe!</b></button></td>
            <td></td>
        </tr>
        <tr>
            <td><b><button type="button" style="background-color: black; color: white" class="btn btn-secondary">Tài Khoản:</b></td>
            <td><input style="width: 280px; height: 40px" name="username" type="text" required></td>
        </tr>
        <tr>
            <td><b><button type="button" style="background-color: black; color: white" class="btn btn-secondary">Mật Khẩu:</b></td>
            <td><input style="width: 280px; height: 40px" name="password" type="password" required></td>
        <tr>
            <td></td>
            <td>
                <button style="width: 200px" class="btn btn-success" value="Login" name="login" type="submit">Đăng nhập</button>
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