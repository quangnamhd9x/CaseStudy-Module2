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
        background-image: url("../files/backgrounds/background1.jpeg");
        background-color: burlywood;
    }
</style>
<body>
<button><a href="index.php?page=add">ADD</a></button>
    <table style="color: white">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Giới tính</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
            <th>Tùy chọn</th>
        </tr>
        <?php foreach ($students as $key=>$student): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $student->getName(); ?></td>
            <td><?php echo $student->getGender(); ?></td>
            <td><?php echo $student->getBirthday(); ?></td>
            <td><?php echo $student->getAddress(); ?></td>
            <td><img style="width: 50px" src="<?php echo $student->getImage(); ?>"></td>
            <td><a href="index.php?page=update&id=<?php echo $student->getId(); ?>">Cập nhật</a> </td>
            <td><a onclick="return confirm('Bạn chắc chứ?')" href="index.php?page=delete&id=<?php echo $student->getId(); ?>">Xóa</a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>