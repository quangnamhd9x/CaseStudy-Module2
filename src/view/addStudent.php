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
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Họ tên</td>
                <td><input name="name" type="text"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td><input name="gender" type="text"></td>
            </tr>
            <tr>
                <td>Ngày Sinh</td>
                <td><input name="birthday" type="date"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input name="address" type="text"></td>
            </tr>
            <tr>
                <td>Ảnh</td>
                <td><input name="image" type="file"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">ADD</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
