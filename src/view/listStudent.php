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
        background-image: url("https://aphoto.vn/wp-content/uploads/2018/04/typo-anh-ky-yeu-dep-4.jpg");
        background-repeat: unset;
        background-position: left top;
        background-attachment: fixed;
    }
    table {
        background-image: url("https://msmobile.com.vn/upload_images/images/hinh-nen-powerpoint-mau-sang-2.jpg");
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
<div align="center"><button class="btn btn-success"><a href="index.php?page=add">Thêm học sinh</a></button>
<button class="btn btn-success"><a href="src/view/subjects.php">Xem điểm</a></button>
<button class="btn btn-success"><a href="src/view/tkb.php">Xem thời khóa biểu</a></button>
<button class="btn btn-success"><a href="index.php?page=add">Đặt lời nhắc cho lớp</a></button>
<button class="btn btn-success"><a href="index.php?page=add">Top thi đua trong lớp</a></button>
<button class="btn btn-success"><a href="index.php?page=add">Học sinh lưu tâm</a></button>
<button class="btn btn-danger"><a href="http://localhost/CaseStudy-School/src/view/login.php">Đăng xuất</a></button>
</div>
<br>
<table align="center" class="table" style="width: auto;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Giới tính</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Ảnh</th>
        <th colspan="2" scope="col">Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key=>$student): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $student->getName(); ?></td>
            <td><?php echo $student->getGender(); ?></td>
            <td><?php echo $student->getBirthday(); ?></td>
            <td><?php echo $student->getAddress(); ?></td>
            <td><img style="width: 100px" src="<?php echo $student->getImage(); ?>"></td>
            <td><button class="btn btn-info"><a href="index.php?page=update&id=<?php echo $student->getId(); ?>">Cập nhật</a> </button></td>
            <td><button class="btn btn-danger"><a onclick="return confirm('Bạn chắc chứ?')" href="index.php?page=delete&id=<?php echo $student->getId(); ?>">Xóa</a> </button></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>