<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <table>
        <tr>
            <td>Họ tên</td>
            <td><input name="name" type="text" value="<?php echo $student["name"]; ?>"></td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td><input name="gender" type="text" value="<?php echo $student["gender"]; ?>"></td>
        </tr>
        <tr>
            <td>Ngày Sinh</td>
            <td><input name="birthday" type="date" value="<?php echo $student["birthday"]; ?>"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input name="address" type="text" value="<?php echo $student["address"]; ?>"></td>
        </tr>
        <tr>
            <td>Ảnh</td>
            <td><input name="image" type="file" value="<?php echo $student["image"]; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
