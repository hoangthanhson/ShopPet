<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ketqua.php" method="post">
        <div class="container" align="center">
            <div class="header">
                <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
            </div>
            <div class="content">
                Chọn phép tính:
                <label for="cong" name="pt">Cộng</label>
                <input type="radio" id="cong" name="pt" value="Cộng">
                <label for="tru">Trừ</label>
                <input type="radio" id="tru" name="pt" value="Trừ">
                <label label for="nhan">Nhân</label>
                <input type="radio" id="nhan" name="pt" value="Nhân">
                <label label for="chia">Chia</label>
                <input type="radio" id="chia" name="pt" value="Chia">
                <table>
                    <tr>
                        <td>Số thứ nhất:</td>
                        <td>
                            <input type="text" name="no1" size="20" placeholder="Nhập số thứ nhất" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Số thứ nhì:</td>
                        <td>
                            <input type="text" name="no2" size="20" placeholder="Nhập số thứ nhì" required>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <input type="submit" name="submit" value="Tính">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>